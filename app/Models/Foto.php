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
        "tanggalUnggah",
        "userID",
        "albumID"
    ];

public function album()
{
    return $this->belongsTo(album::class, "albumID");
}

public function user()
{
    return $this->belongsTo(User::class, "userID");
}

public function komentarFoto()
{
    return $this->hasMany(KomentarFoto::class, "fotoID");
}

public function likeFoto()
{
   return $this->hasMany(LikeFoto::class, "fotoID");
}

// public function user()
// {
//     $this->belongsTo(User::class, "userID");
// }
}
