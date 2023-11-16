<?php

namespace App\Http\Controllers;

use App\Models\Sasaran;
use Illuminate\Http\Request;

class SasaranController extends Controller
{
    public function index(){
        //get visis
        $sasaran = Sasaran::all();
        return view('layouts/sasaran',compact('sasaran'));
    }

    public function store(Request $request){
        // validate form
        $this->validate($request, [
            'kode'     => 'required|min:3',
            'nama_sasaran'     => 'required|min:3'
        ]);

        //create post
        Sasaran::create([
            'kode'   => $request->kode,
            'nama_sasaran'   => $request->nama_sasaran
        ]);

        //redirect to index
        return redirect()->route('layouts.sasaran')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $data = Sasaran::findOrFail($id);

        $data->update($request->all());
        return redirect('/sasaran');
    }

    public function destroy($id){
        $sasaran = Sasaran::findorfail($id);
        $sasaran->delete();
        return redirect('/sasaran');
    }

    public function search(Request $request){
        if($request->has('search')){
            $sasaran = Sasaran::where('nama_sasaran','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $sasaran = Sasaran::all();
        }

        return view('layouts.sasaran',['sasaran' => $sasaran]);
    }
}
