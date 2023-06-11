<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuisionerController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data['title'] = 'Data Quisioner';
        return view('admin.quisioner.index', $data);
    }
}
