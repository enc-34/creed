<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class account extends Model
{
    use HasFactory;
    public function user1s(){
        return $this->hasOne('App\Models\User1');
    }
    protected $fillable = [
        'userName',
        'email',
        'password',
        'userPhoneNumber',
        'isActive',
        'isPremiumAccount',
        'role',
        'modelUser',
      ];
}
