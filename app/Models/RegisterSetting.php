<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class RegisterSetting extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mul-register_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'required_verify',
        'required_token',
        'length_token',
        'default_token',
    ];
}
