<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Pengunjung;
use App\Models\Jarak;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisatas';
    protected $guarded = ['id'];
    protected $with = ['user', 'category', 'kecamatan'];

    public function scopeFilter($query, array $filters)
    {
        // if (request('search')) {
        //     return $query->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['kecamatan'] ?? false, function ($query, $kecamatan) {
            return $query->whereHas('kecamatan', function ($query) use ($kecamatan) {
                $query->where('slug', $kecamatan);
            });
        });

        $query->when($filters['user'] ?? false, function ($query, $user) {
            return $query->whereHas('user', function ($query) use ($user) {
                $query->where('username', $user);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Pengunjung()
    {
        return $this->hasMany(Pengunjung::class);
    }

    public function jarak()
    {
        return $this->hasMany(Jarak::class);
    }

    // public function getRouteKeyName(): string
    // {
    //     return 'slug';
    // }
}
