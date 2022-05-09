<?php

namespace App\Models;

use App\Http\Schemas\UserSchema;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\This;
use Psy\Util\Json;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

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
        'data' => 'json',
    ];

    protected function getFullNameAttribute()
    {
        return (key_exists('first_name',$this -> data) ? $this -> data ['first_name']: null).' '.(key_exists('last_name',$this -> data) ? $this -> data ['last_name']: null);
    }

    protected function getActivationInLetterAttribute()
    {
         if (key_exists('activation',$this -> data)) return 'Active';
         else return 'Inactive';
    }

    protected function getUserTypeInLetterAttribute()
    {
        if (key_exists('user_type',$this -> data)) return 'Admin';
        else return 'Customer';
    }

}
