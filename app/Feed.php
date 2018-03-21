<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model // App\Feed
{
    protected $fillable = ['feed', 'user_id', 'created_at', 'update_at'];

    // $feed->user()が使えるようになる
    public function user() {
        return $this->belongsTo('App\User');
    }
}



















