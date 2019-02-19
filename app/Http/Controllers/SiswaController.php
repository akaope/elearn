<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;

class SiswaController extends Controller
{
    //
    public function showAll(){
    	// select all record from siswa's model
    	// $data = Siswa::All();
    	$data = "tes";
    	// return data to view
    	return view('siswa.display', ['dataSiswa' => $data]);
    	// siswa.display = siswa/display.blade.php
    }

    public function saveNew(Request $request){

    }
}
