<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeFoto extends Model
{
    use HasFactory;

    protected $table = "like_Foto";

    // No need for fillable. It'll be inputted within the controllers.

    public function foto()
    {
        $this->belongsTo(Foto::class, "fotoID");
    }

    public function user()
    {
        $this->belongsTo(User::class, "userID");
    }
}
