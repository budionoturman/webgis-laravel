<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin');
        return view('dashboard/user/index', [
            'title' => 'Daftar User',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');
        return view('dashboard/user/create', [
            'title' => 'Tambah User',
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin');

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:155',
            'email' => 'required|email:dns',
            'password' => 'required|min:3',
            'user_role' => 'required',
            'image' => '|file|max:1024'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('wisata-images');
        }

        User::create($validatedData);
        return redirect('dashboard/users')->with('success', 'Tambah User Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('isAdmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('isAdmin');
        return view('dashboard/user/edit', [
            'title' => 'Edit User',
            'users' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('isAdmin');

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email:dns',
            'image' => '|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profil-images');
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('dashboard/users')->with('success', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('isAdmin');

        if ($user->image) {
            Storage::delete($user->image);
        }

        User::destroy($user->id);
        return redirect('dashboard/users')->with('success', 'User berhasil dihapus');
    }
}
