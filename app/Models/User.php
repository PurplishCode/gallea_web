<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
     protected $table = "users";
     // Please for the love of god. Don't forget about this for the session authentications default value!
protected $primaryKey = "userID";


    protected $fillable = [
        'username',
        'email',
        'password',
        "namaLengkap",
        "alamat"
    
    ];

    public function foto()
{
    return $this->hasMany(Foto::class, "userID");
}

public function album()
{
    return $this->hasMany(album::class, "userID");
}

public function komentarFoto()
{
    return $this->hasMany(komentarFoto::class, "userID");
}

public function likeFoto()
{
    return $this->hasMany(likeFoto::class, "userID");

}
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


}
