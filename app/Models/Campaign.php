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
 /*
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'planning',
        'campaignContenu',
        'compaignObjective',
        'campaignName',
        'template',
    ];

    /*
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    /*protected $hidden = [
        'password',
        'remember_token',
    ];*/

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/

}