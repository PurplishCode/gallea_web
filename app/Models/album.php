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
        "userID",
        "albumID"
    ];

public function foto()
{
    return $this->hasMany(Foto::class, "albumID");
}

public function user()
{
    return $this->belongsTo(User::class, "userID");
}
}
