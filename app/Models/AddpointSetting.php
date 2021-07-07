<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AddpointSetting extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mul-addpoint_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'strength_limit',
        'agility_limit',
        'vitality_limit',
        'energy_limit',
        'command_limit',
    ];
}
