<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;
use App\Models\Hotel;
use App\Models\User;

class Jarak extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
