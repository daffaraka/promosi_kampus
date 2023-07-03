<?php

namespace App\Http\Controllers;

use App\Models\Quisioner;
use Illuminate\Http\Request;
use App\Models\JenisQuisioner;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{


    public function saveSession(Request $request) {


        $respondenData = [
            'as' => $request->input('as'),
            'Name' => $request->input('Name'),
            'email' => $request->input('email')
        ];

        Session::put('responden', $respondenData);


        return redirect()->route('general.quisionerM');
    }

    public function quisionerM()
    {
        $responden = Session::get('responden');

        // dd($responden);
        // Mengirim data responden ke view
        $data['responden'] = $responden;
        $data['quisioner'] = JenisQuisioner::with('listPertanyaan')->first();

        // dd($quisioner);
        return view('general.quisioner.quisionerM',$data);
    }

    public function saveSessionQusionerM(Request $request) {


        dd($request->all());
        // $respondenData = [
        //     'as' => $request->input('as'),
        //     'Name' => $request->input('Name'),
        //     'email' => $request->input('email')
        // ];

        // Session::put('responden', $respondenData);


        // return redirect()->route('general.quisionerM');
    }


}
