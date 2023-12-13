<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class firstModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "infos";

    public $timestamps = false;

    protected $fillable = ['introduction', 'bio', 'skill1', 'skill1Dis', 'skill2', 'skill2Dis', 'skill3', 'skill3Dis', 'Hob', 'Hob1', 'Hob1Dis', 'Hob2', 'Hob2Dis', 'Hob3', 'Hob3Dis', 'Like1', 'Like1Dis', 'Like2', 'Like2Dis', 'Like3', 'Like3Dis', 'Dis1', 'Dis1Dis', 'Dis2', 'Dis2Dis', 'Dis3', 'Dis3Dis'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
