<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\rent;

class RentController extends Controller
{
    //
    public function tambah(Request $request){

        $tambah = new rent;
        $tambah->nama_pemesanan = $request->nama_pemesanan;
        $tambah->kode_mobil = $request->kode_mobil;
        $tambah->nama_mobil = $request->nama_mobil;
        $tambah->tanggal_pemesanan = $request->tanggal_pemesanan;
        $tambah->alamat = $request->alamat;
        $tambah->no_telephone = $request->no_telephone;
        $tambah->save();
        return redirect()->route('car.index')->with('success', 'Data berhasil disimpan');

    }
    
}
