<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{
    public function getChats(Request $request)
    {
        try {
            $userId = auth()->user()->id;
            $chats = Chat::where('user_id', $userId)
                ->whereDate('created_at', date('Y-m-d'))
                ->orderBy('created_at', 'asc')
                ->get();

            return response()->json([
                'data' => $chats
            ]);
        } catch (\Exception $e) {
            Log::error('Error getting chats: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error getting chats'
            ], 500);
        }
    }

    public function sendChat(Request $request)
    {
        try {
            $user = auth()->user();
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not authenticated'
                ], 401);
            }

            // Save the user's message.
            $chat = new Chat();
            $chat->user_id = $user->id;
            $chat->message = $request->message;
            $chat->is_bot = false;
            $chat->save();

            // Prepare messages for OpenAI Chat API.
            $messages = [];
            $messages[] = [
                'role' => "system",
                'content' => "Kamu adalah AI bernama Expirio yang ahli dalam memberikan saran mengenai sampah. Kamu hanya dapat memberikan rekomendasi mengenai pengolahan sampah yang baik dan tidak dapat menjawab hal lainnya."
            ];
            $messages[] = [
                'role' => "system",
                'content' => "Kamu adalah bagian dari platform Pick It Up, yang bertujuan untuk mengolah sampah di Indonesia. Pick It Up memiliki dua layanan utama yakni dropoff dan pickup yang ada pada menu wasteway."
            ];

            // Include only the 10 most recent messages from today.
            $previousChats = Chat::where('user_id', $user->id)
                ->whereDate('created_at', date('Y-m-d'))
                ->orderBy('created_at', 'desc')
                ->limit(10)
                ->get()
                ->reverse();

            foreach ($previousChats as $chatItem) {
                $role = $chatItem->is_bot ? "assistant" : "user";
                $messages[] = [
                    'role' => $role,
                    'content' => $chatItem->message
                ];
            }

            // Log the messages array to help with debugging.
            Log::info('Sending messages to OpenAI: ' . json_encode($messages));

            // Call OpenAI Chat API.
            $result = OpenAI::chat()->create([
                'model' => 'gpt-4o',
                'messages' => $messages,
            ]);

            Log::info('OpenAI response: ' . json_encode($result));

            if (!isset($result->choices[0]->message->content)) {
                Log::error('Empty response from OpenAI');
                return response()->json([
                    'success' => false,
                    'message' => 'Empty response from OpenAI'
                ], 500);
            }

            // Save the bot's response.
            $bot = new Chat();
            $bot->user_id = $user->id;
            $bot->message = $result->choices[0]->message->content;
            $bot->is_bot = true;
            $bot->save();

            // Return the updated conversation for today.
            $chats = Chat::where('user_id', $user->id)
                ->whereDate('created_at', date('Y-m-d'))
                ->orderBy('created_at', 'asc')
                ->get();

            return response()->json([
                'data' => $chats
            ]);
        } catch (\Exception $e) {
            Log::error('Error in sendChat: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }
}