<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$faker = Faker::create();

       foreach(range(0,5) as $index) {
DB::table("foto")->insert([
"judulFoto" => $faker->name,
"deskripsiFoto" => $faker->text,
"tanggalUnggah" => $faker->date,
"lokasiFile" => $faker->text,
"albumID" => $faker->randomElement(DB::table("album")->pluck("albumID")),
"userID" => $faker->randomElement(DB::table("users")->pluck("userID"))
]);
       } 
    }
}
