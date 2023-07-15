<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/categories', [
            'title' => 'Semua Category',
            'categories' => Category::all()
        ]);
    }

    //     public function index2(Category $category)
    //     {
    //         return view('home/wisata', [
    //             'title' => "Kategori : $category->name",
    //             'wisata' => $category->wisata,
    //             'category' => $category->name
    //         ]);
    //     }
}
