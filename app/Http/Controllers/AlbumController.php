<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Http\Requests\StorealbumRequest;
use App\Http\Requests\UpdatealbumRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('album.index', [
            "title" => "UDC | Album Foto"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "namaAlbum" => "string|required|max:30",
            "deskripsi" => "string|required|max:15",
            "tanggalDibuat" => "date"
        ]);

        $dataIsi = [
            "namaAlbum" => $request->namaAlbum,
            "deskripsi" => $request->deskripsi,
            "tanggalDibuat" => now(),
            "userID" => auth()->user()->userID
        ];


        $dataSuccess = album::create($dataIsi);
    if($dataSuccess) {
        Session::flash("succesful", $request->namAlbum);
        Log::info("Album has successfully added!", $dataSuccess);
        return redirect()->back();
    } else {
Log::info("Album failed to be added.");
return redirect()->back();    
}
    }

    /**
     * Display the specified resource.
     */
    public function show(album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealbumRequest $request, album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(album $album)
    {
        //
    }
}
