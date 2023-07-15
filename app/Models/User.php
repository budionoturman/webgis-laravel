<?php

namespace App\Models;

use App\Models\Wisata;
use App\Models\Jarak;
use App\Models\Pengunjung;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    // ];
    protected $guarded = ['id'];

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

    public function Wisata()
    {
        return $this->hasMany(Wisata::class);
    }

    public function Pengunjung()
    {
        return $this->hasMany(Pengunjung::class);
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }


    public function jarak()
    {
        return $this->hasMany(Jarak::class);
    }
}
