<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Appartement;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appartements')->insert([
            'type' => 'appartement',
            'nb_piece' => Str::random(1),
            'prix' => 5000000,
            'surface' => 5000000,
            'localisation' => Str::random(10),
            'description' => Str::random(10),
            'status' => Str::random(10),
        ]);
    }
}


//id	type	nb_piece	localisation	prix	surface	description	status	date_publication	date_location	id_user