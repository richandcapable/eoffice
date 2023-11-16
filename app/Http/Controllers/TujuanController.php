<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function store(Request $request){
        // validate form
        $this->validate($request, [
            'tujuan'     => 'required|min:3'
        ]);

        //create post
        Tujuan::create([
            'tujuan'   => $request->tujuan
        ]);

        //redirect to index
        return redirect()->route('layouts.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $data = Tujuan::findOrFail($id);

        $data->update($request->all());
        return redirect('/visimisi');
    }

    public function destroy($id){
        $tujuan = Tujuan::findorfail($id);
        $tujuan->delete();
        return redirect('/visimisi');
    }

}
