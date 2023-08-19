<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Models\User1;
use App\Models\ListContactBlog;
class folder extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public function user1s(){
<<<<<<< HEAD
        return $this->belongsToMany(User1::class);
=======
        return $this->belongsToMany('App\Models\User1');
>>>>>>> 7605ca9b460b031e704798c1c8ca0f5d1c4f3359
    }
    public function listcontactblogs(){
        return $this->belongsToMany(ListContactBlog::class);
    }


    /*
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'FolderName',
        'contactList',
        
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
