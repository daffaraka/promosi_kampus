<?php

namespace App\Http\Controllers;

use App\Models\Quisioner;
use Illuminate\Http\Request;
use App\Models\JenisQuisioner;
use App\Models\ListPertanyaan;

class ListPertanyaanController extends Controller
{
    public function index()
    {
        $data['list'] = ListPertanyaan::with('jenisQuisioner')->get();
        $data['title'] = 'List Pertanyaan Kuis';
        return view('admin.list-pertanyaan.index', $data);
    }

    public function create($id)
    {
        $data['quisioner'] = Quisioner::find($id);
        $data['title'] = 'Tambah Jenis Kuis';

        return view('admin.list-pertanyaan.addList', $data);
    }




    public function store(Request $request)
    {
        $id = $request->id_quisioner ?? Quisioner::where('question', $request->id_quisioner)->first()->id;

        JenisQuisioner::create([
            'nama_jenis' => $request->nama_jenis,
            'id_quisioner' => $id
        ]);

        return redirect()->route('list-pertanyaan.index');
    }


    public function edit($id)
    {
        $data['title'] = 'Tambah Jenis Kuis';
        $data['jenis'] = JenisQuisioner::with('quisioner')->find($id);
        return view('admin.list-pertanyaan.ubahList', $data);
    }

    public function update(Request $request, $id)
    {

        $jenis = JenisQuisioner::with('quisioner')->find($id);
        $jenis->update([
            'nama_jenis' => $request->nama_jenis,
        ]);

        return redirect()->route('list-pertanyaan.index');
    }
    public function destroy($id)
    {

        $jenis = JenisQuisioner::with('quisioner')->find($id);
        $jenis->delete();
        return redirect()->route('list-pertanyaan.index');
    }
}
