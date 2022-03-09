<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'paket' => 'A',
            'harga' => 'Rp.5.000.000',
            'draft' => 0
        ]);
    }
}
