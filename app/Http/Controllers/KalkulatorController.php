<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    function index()
    {
        return view('layouts.aritmatika');
    }

    function hasil(Request $request){

        $angka1 = $request->input('bil_1');
        $angka2 = $request->input('bil_2');
        $operator = $request->input('operator');
        $hasil = 0;

        if($operator=="penjumlahan"){
            $hasil = $angka1 + $angka2;
        } else if ($operator=="pengurangan"){
            $hasil = $angka1 - $angka2;
        } else if ($operator=="perkalian"){
            $hasil = $angka1 * $angka2;
        } else if ($operator=="pembagian"){
            $hasil = $angka1 / $angka2;
        } else if ($operator=="modulus"){
            $hasil = $angka1 % $angka2;
        } else {
            $hasil = 0;
        }

        // echo $hasil;
        return redirect('/Kalkulator')->with('hasil', "Hasil : " .$hasil);
    }
}
