<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Campaign extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public function user1s(){
        return $this->belongsToMany('App\Models\User1');
    }
    public function listcontactblogs(){
        return $this->belongsToMany('App\Models\listcontactblog');
    }
}