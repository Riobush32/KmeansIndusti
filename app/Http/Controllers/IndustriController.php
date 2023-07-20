<?php

namespace App\Http\Controllers;

use App\Models\DataIndustri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index()
    {

        return view('pages.dataIndustri.index',[
            'data' => DataIndustri::paginate(5),
        ]);
    }
}
