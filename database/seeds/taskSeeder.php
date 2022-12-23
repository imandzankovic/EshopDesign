<?php

use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_models')->insert([
            'name'=>'ITask',
            'description'=>'task 123',
            'details'=>' ',
            'done'=>false,
            'user_id'=>'1',
  
        ]);
    }
}
