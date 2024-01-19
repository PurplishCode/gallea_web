<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();
foreach(range(0, 5) as $index) {
DB::table('album')->insert([
"namAlbum" => $faker->name,
"deskripsi" => $faker->text,
"tanggalDibuat" => $faker->date,
"userID" => $faker->randomElement(DB::table('users')->pluck("userID"))
]);
}
        }
    }

