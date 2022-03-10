<?php

namespace App\Models;

use CreateUsersTable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Nullable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    


    protected $fillable = [
        
        'email',
        'first_name',
        'last_name',
        'date_of_birth',
        'password',
        'id_number',
        'gender',
        'phone_number',

        'principal',
        'months',
        'use',
        'country',
        'city',
        'postal_code',
        'village_estate',
        'promo_code',

        'totalinterest',
        'deposit',
        'totalpayment',
        'duedate',
        'monthlypayment',

        'loan_id',
        
        
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
    ];
}
