<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            "judulFoto" => "required|string|max:30",
            "deskripsi" => "required|string|max:254",        
        ]);

        if($request->hasFile("lokasiFile")){
$request->validate([
    "lokasiFile" => "required|mimes:png,jpg"
]);
        }

$imageName = time().".".$request->lokasiFile->extension();

Foto::create();

toast("Succesfully Created Image!", "success");
        return back()->with("success", "You have succesfully created the image!")->with("image", $imageName);
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
