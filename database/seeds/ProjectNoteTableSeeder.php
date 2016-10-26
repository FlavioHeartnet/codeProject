<?php

use Illuminate\Database\Seeder;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \codeProject\Entities\ProjectNote::truncate();
        factory(\codeProject\Entities\ProjectNote::class, 10)->create();
    }
}
