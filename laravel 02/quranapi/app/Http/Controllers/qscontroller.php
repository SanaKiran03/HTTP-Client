<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class qscontroller extends Controller
{
    //
    function getsurahdata()
    {
        $dataquransurah = Http::get("https://api.alquran.cloud/v1/meta");

        return view("surahs", ["collection" => $dataquransurah["data"]["surahs"]["references"]]);
    }
}

