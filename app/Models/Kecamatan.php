<?php

namespace App\Models;

use App\Models\Wisata;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }

    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
