<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get visis
        $misis = Misi::all()->where('id','1');
        return view('layouts/visimisi',compact('misis'));
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
        // validate form
        $this->validate($request, [
            'misi'     => 'required|min:5'
        ]);

        //create post
        Misi::create([
            'misi'   => $request->misi
        ]);

        //redirect to index
        return redirect()->route('layouts.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request){
        $data = Misi::findOrFail('1');

        $data->update($request->all());
        return redirect('/visimisi');
    }
}
