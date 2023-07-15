<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;

class Pengunjung extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
