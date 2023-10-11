<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\Misi;
use Illuminate\Http\Request;

class VisiController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get visis
        $visis = Visi::all()->where('id','1');
        $misi = Misi::all();
        return view('layouts/visimisi',compact('visis','misi'));
        //render view with visis
        // return view('layouts.visimisi', compact('visis'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('layouts.visimisi');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'visi'     => 'required|min:5'
        ]);

        //create post
        Visi::create([
            'visi'   => $request->visi
        ]);

        //redirect to index
        return redirect()->route('layouts.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request){
        $data = Visi::findOrFail('1');

        $data->update($request->all());
        return redirect('/visimisi');
    }
}