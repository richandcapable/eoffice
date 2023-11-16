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
    public function index($id)
    {
        //get visis
        $misi = Misi::find($id);
        return view('visimisi', ['misi' => $misi]);
        
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
            'misi' => 'required|min:5',
        ]);

        //create post
        Misi::create([
            'misi' => $request->misi,
        ]);

        //redirect to index
        return redirect()
            ->route('layouts.visimisi')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request, $id)
    {
        $data = Misi::findOrFail($id);

        $data->update($request->all());
        return redirect('/visimisi');
    }

    

    public function destroy($id)
    {
        $misi = Misi::findorfail($id);
        $misi->delete();
        return redirect('/visimisi');
    }
}
