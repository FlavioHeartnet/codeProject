<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \codeProject\Entities\User::truncate();
        factory(\codeProject\Entities\User::class, 12)->create();
    }
}
