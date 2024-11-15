<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Tweet extends Model
{
    //
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function($tweet) {
            $tweet->uuid = Str::uuid();
        });
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
