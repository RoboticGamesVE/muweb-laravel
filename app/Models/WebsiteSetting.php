<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class WebsiteSetting extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mul-website_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'website_url',
        'website_title',
        'md5',
        'crypt_key',
        'admin_nick',
        'admin_mail',
        'id_template',
        'copyright',
        'license',
    ];
}
