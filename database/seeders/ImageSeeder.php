<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'id_appartement' => 1,
            'image_url' => '\images\appart.jpg',
        ]);
    }
}
