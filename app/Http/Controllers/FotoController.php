<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use App\Models\album;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        if(Auth::check()) {
            Log::info("User is authenticated!");

           $fotoData = Foto::all();

            return view("gallery.index", ["title" => "UDC | Home Page", "fotoData" => $fotoData]);
        } else {
            Log::info("User is not authenticated.");
        

            return redirect()->back();
        }
        // Temporary Index for displaying photo.
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albumData = album::all();

        return view("gallery.create", [
            "title" => "UDC | Post Image",
            "albumData" => $albumData
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {

// $request->validate([
//     "judulFoto" => "string|required|max:30",
//     "deskripsiFoto" => "string|required|max:200",
//     "tanggalUnggah" => "date",
//     "lokasiFile" => "mimes:png,jpg|required"
// ]);
$user = auth()->user();
$album = $user->album;

if(!$album || $album->isEmpty()) {

}
$finds = $album->find("albumID", $request->albumID);

$ambilFile = $request->file("lokasiFile");
$extensiFile = $ambilFile->extension();
$namaFile = date('ymdhis') . '.' . $extensiFile;

$path = "public/img";
$storePath = Storage::putFileAs($path, $ambilFile, $namaFile);

$ambilFile->move(public_path("img"), $namaFile);

$dataFoto = [
    "judulFoto" => $request->judulFoto,
    "deskripsiFoto" => $request->deskripsiFoto,
    "tanggalUnggah" => now(),
    "userID" => $user->userID,
    "albumID" => $finds,
    "lokasiFile" => $namaFile,
];

Log::info($dataFoto);

if($storePath == true) {
    Foto::create($dataFoto);
}


return redirect()->back()->with("succesful", "Data was succesfully created!");


    }

    /**
     * Display the specified resource.
     */
    public function show($albumID)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
    
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
