<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function datauser()
    {
        $users = DB::table('users')->get();

        return view('datauser', ['user' => $users]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => $request->created_at
        ]);

        return redirect('/datauser');
    }

    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();

        return view('edit',['user' => $users]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => $request->created_at
        ]);

        return redirect('/datauser');
    }

    public function hapus($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect ('/datauser');
    }
}
