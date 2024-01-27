<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = "foto";

    protected $primaryKey = "fotoID";


    protected $fillable = [
        "judulFoto",
        "deskripsiFoto",
        "lokasiFile",
    ];

public function album()
{
    $this->belongsTo(album::class, "albumID");
}

public function user()
{
    $this->belongsTo(User::class, "userID");
}

public function komentarFoto()
{
    $this->hasMany(KomentarFoto::class, "fotoID");
}

public function likeFoto()
{
    $this->hasMany(LikeFoto::class, "fotoID");
}

// public function user()
// {
//     $this->belongsTo(User::class, "userID");
// }
}
