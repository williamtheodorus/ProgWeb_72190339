<?php

use Illuminate\Database\Seeder;

class DescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desc')->insert([
            'description' => 'Universitas Kristen Duta Wacana Terbaik'
        ]);
    }
}
