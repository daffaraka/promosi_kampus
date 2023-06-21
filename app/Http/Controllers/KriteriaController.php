<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{

    public function index()
    {
        $data['kriteria'] = Kriteria::all();
        $data['title'] = 'Kriteria';
        return view('admin.kriteria.index', $data);
    }


    public function create()
    {
        $data['title'] = 'Tambah Kriteria';
        return view('admin.kriteria.addKriteria', $data);
    }


    public function store(Request $request)
    {
        Kriteria::create($request->all());

        return redirect()->route('kriteria.index');
    }



    public function edit($id)
    {
        $data['title'] = 'Tambah Kriteria';
        $data['kriteria'] = Kriteria::find($id);

        return view('admin.kriteria.editKriteria', $data);
    }


    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->update($request->all());

        return redirect()->route('kriteria.index');
    }


    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        return redirect()->route('kriteria.index');

    }
}
