<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trash extends Model
{
    protected $guarded=['id'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
