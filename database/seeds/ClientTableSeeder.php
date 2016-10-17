<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \codeProject\Client::truncate();
        factory(\codeProject\Client::class, 10)->create();
    }
}
