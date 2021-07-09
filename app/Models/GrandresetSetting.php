<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class GrandresetSetting extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mul-grandreset_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'resets',
		'level',
		'zen',
		'credits',
		'credits_formula',
		'level_points',
		'level_points_formula',
		'clear_skills',
		'clear_inventory',
		'reset_stats'
    ];
}
