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
        \codeProject\Entities\Client::truncate();
        factory(\codeProject\Entities\Client::class, 12)->create();
    }
}
