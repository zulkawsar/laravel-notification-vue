<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'user_id', 'body',
    ];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }
    
}
