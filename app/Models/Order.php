<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Add Eloquent Relationship
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Order extends Model
{
    // Declares protected variables
    protected $guarded=['id'];

    // Declare Eloquent Relationship
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
    
    public function trashes(): HasMany
    {
        return $this->hasMany(Trash::class);
    }

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }
}
