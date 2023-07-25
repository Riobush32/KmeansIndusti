<?php

namespace App\Http\Controllers;

use App\Models\Centroid;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('is_super_admin');
        $this->middleware('is_admin');
    }


    public function index()
    {
        $centroid = Centroid::where('iterasi', 0)->orderBy('total', 'asc')->get();

        return view('pages.hasil.index',[
            'active' => 'hasil',
            'data' => $centroid,
        ]);
    }
}
