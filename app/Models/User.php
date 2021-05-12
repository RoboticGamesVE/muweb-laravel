<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'memb_info';

    public $timestamps = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'memb_guid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'memb___id',
        'mail_addr',
        'memb__pwd',
        'memb_name',
        'sno__numb',
        'bloc_code',
        'ctl1_code',
        'mail_chek',
        'appl_days',
        'modi_days',
        'out__days',
        'true_days',
        'SecretQuestion',
        'SecretAnswer',
        'Country',
        'Gender',
        'confirmed',
        'activation_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'memb__pwd',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
