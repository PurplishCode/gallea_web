<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Temporary Index for displaying photo.
        return view("gallery.index",[
            "title" => "UDC | List Foto"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("gallery.create", [
            "title" => "UDC | Post Image"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {

$request->validate([
    "judulFoto" => "string|required|max:30",
    "deskripsiFoto" => "string|required|max:200",
    "tanggalUnggah" => "date",
    "lokasiFile" => "mimes:png,jpg|required"
]);

$ambilFile = $request->file("lokasiFile");
$tambahExtensiFile = $ambilFile->extension();
$namaFile = date("ymhdis") . "." . $tambahExtensiFile;
$ambilFile->move(public_path("img/gallery", $namaFile));

$dataFoto = [
    "judulFoto" => $request->judulFoto,
    "deskripisiFoto" => $request->deskripsiFoto,
    "tanggalUnggah" => now(),
    "lokasiFile" => $namaFile,
];

Foto::create($dataFoto);
return redirect()->with("succesful", "Data was succesfully created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
