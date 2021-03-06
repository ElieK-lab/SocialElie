<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //    // 'username',

    // ];
   protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getUsernameAttribute($username){//Eloquent Accessor:thats mean when the user get the username do something on it
        return ucwords($username);
    }
    public function setPasswordAttribute($password){//Eloquent Mutator:thats mean when the user sets the password do something on t
        /**
         *that will called when :$user->password='something';
        */
        $this->attributes['password']=bcrypt($password);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
