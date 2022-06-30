<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('admins.index', ['users' => User::get()]);

    }

    public function create()
    {
        return view('admins.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required',
        ]);

        if ($request->file('avatar')) {
            $image_name = $request->file('avatar')->store('images', 'public');
        }

        $user = new User;
        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        // $user->password = $request->get('password');
        $user->password = Hash::make($request->get('password'));
        $user->avatar = $image_name;

        $user->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('user.index')
            ->with('success', 'Admin Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admins.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('admins.edit');
        $user= User::where('id', $id)->first();
        return view('admins.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required',
        ]);
        $user = User::where('id', $id)->first();
        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        if ($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))) {
            Storage::delete('public/'.$user->avatar);
        }
        $image_name = $request->file('avatar')->store('images', 'public');
        $user->avatar = $image_name;

        $user->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('user.index')
            ->with('success', 'Admin Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus!!');
    }
}