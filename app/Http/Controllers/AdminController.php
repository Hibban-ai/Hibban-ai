<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexadmin()
    {
        $users = User::paginate(5);

        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createuser()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postuser(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'foto' =>'image',
        ]);
        $image = $request->foto->getClientOriginalName();
        $request->foto->storeAs('foto',$image);
        $request['password'] = bcrypt($request['password']);
        $store= User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
            'foto' => $image,
        ]);

        if($store){
            return redirect()->route('indexadmin')
            ->with('success','Berhasil Menyimpan !');
        }else{
            Alert::error('error', 'Opss sepertinya ada yang salah');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser($id)
    {
        $data= User::find($id);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, $id)
    {
        $data= User::find($id);
        
        $store= $data->update($request->all());

        if($store){
            return redirect()->route('indexadmin')
            ->with('success','Berhasil Mengedit !');
        }else{
            Alert::error('error', 'Opss sepertinya ada yang salah');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyuser($id)
    {
        $data= User::find($id);
        $delete= $data->delete();
        
        if($delete){
        return redirect()->route('indexadmin')
        ->with('success','Berhasil Menghapus!');
        }else{
            Alert::error('error', 'Opss sepertinya ada yang salah');
            return back();
        }
    }
}