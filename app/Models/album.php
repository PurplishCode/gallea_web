<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;

    protected $table = "album";

    protected $primaryKey = "albumID";

    protected $fillable = [
        "namaAlbum",
        "deskripsi",
        "tanggalDibuat",
        "userID"
    ];

public function foto()
{
    $this->hasMany(Foto::class, "fotoID");
}

public function user()
{
    $this->belongsTo(User::class, "userID");
}
}
