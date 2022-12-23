<?php

use Illuminate\Database\Seeder;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_models')->insert([
            'name'=>'Project 1',
            'description'=>'Description for Project 1',
            'task_id'=>'1',
        ]);
    }
}
