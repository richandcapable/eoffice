<?php

namespace App\Http\Controllers;

use App\models\Indikator;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function store(Request $request)
    {
        // validate form
        // $this->validate($request, [
        //     'indikator'         => 'required|min:1',
        //     'satuan_pengukuran' => 'required|min:1',
        //     'target_kondisi_awal' => 'required|min:1',
        //     'target_tahun_2021' => 'required|min:1',
        //     'target_tahun_2022' => 'required|min:1',
        //     'target_tahun_2023' => 'required|min:1',
        //     'target_tahun_2024' => 'required|min:1',
        //     'target_tahun_2025' => 'required|min:1',
        //     'target_kondisi_akhir' => 'required|min:1'
        // ]);

        //create indikator
        Indikator::create($request->all());

        //redirect to index
        return redirect()->route('layouts.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $item = Indikator::findOrFail($id);

        $item->update($request->all());
        return redirect('/visimisi');
    }

    public function destroy($id)
    {
        $indikator = Indikator::findorfail($id);
        $indikator->delete();
        return redirect('/visimisi');
    }
}
