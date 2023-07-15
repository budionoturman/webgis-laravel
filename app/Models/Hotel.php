<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Jarak;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function jarak()
    {
        return $this->hasMany(Hotel::class);
    }
}
