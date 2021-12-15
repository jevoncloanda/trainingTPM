<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Harry',
            'author' => 'Potter',
            'release' => '2001-01-10',
            'price' => 10000,
        ]);
        DB::table('books')->insert([
            'title' => 'Harry2',
            'author' => 'Potter',
            'release' => '2001-01-10',
            'price' => 10000,
        ]);
    }
}
