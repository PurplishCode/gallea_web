<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarFoto extends Model
{
    use HasFactory;

    protected $table = "komentar_foto";
    
protected $primaryKey = "komentarID";

    protected $fillable =[
"isiKomentar"
    ];

    public function foto()
    {
        $this->belongsTo(Foto::class, "fotoID");
    }

    public function user()
    {
        $this->belongsTo(User::class, "userID");
    }
}
