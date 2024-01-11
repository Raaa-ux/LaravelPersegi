<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasPersegiController extends Controller

{
    public function hitungLuas(Request $request)
    {
        $sisi = $request->input('sisi');
        $luas = $sisi * $sisi;

        return view('luas_persegi', ['luas' => $luas, 'sisi' => $sisi]);
    }
}


