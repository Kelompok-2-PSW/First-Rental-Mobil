<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\rent;

class LaporanController extends Controller
{
    //
    public function index(){
        $hasil = rent::all();

        return view('admin.lihatdata',['liat'=>$hasil]);
   }
}
