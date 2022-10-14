<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    const ROLE_PERAWAT = 'perawat';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';

    protected $fillable = [
        'id',
        'name',
        'password',
        'level',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }
}
