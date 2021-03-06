<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \codeProject\Entities\Project::truncate();
        factory(\codeProject\Entities\Project::class, 12)->create();
    }
}
