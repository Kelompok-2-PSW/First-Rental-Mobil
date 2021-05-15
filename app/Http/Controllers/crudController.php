<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = car::latest()->paginate(5);
        return view('admin.crud.index')->with('mobil', $mobil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_mobil' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'STATUS' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:20000',
        ]);
        
        $fileDestination = 'uploaded/mobil';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);

        $car = new car;
        $car->no_mobil = $request->input('no_mobil');
        $car->merk = $request->input('merk');
        $car->harga = $request->input('harga');
        $car->STATUS = $request->input('STATUS');
        $car->gambar = $fileDestination . '/' . $fileName;

        $car->save();

        return redirect()->route('admin.crud.index')->with('success', 'Berhasil menambahkan mobil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = car::find($id);
        return view('admin.crud.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'no_mobil' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'STATUS' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);
        
        $fileDestination = 'uploaded/mobil';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);

        $car = car::find($id);
        $car->no_mobil = $request->input('no_mobil');
        $car->merk = $request->input('merk');
        $car->harga = $request->input('harga');
        $car->STATUS = $request->input('STATUS');
        $car->gambar = $fileDestination . '/' . $fileName;

        $car->save();

        return redirect()->route('admin.crud.index')->with('success', 'Berhasil memperbaharui mobil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        car::find($id)->delete();

        return redirect()->route('admin.crud.index')->with('success', "Mobil berhasil dihapus!");
    }
}