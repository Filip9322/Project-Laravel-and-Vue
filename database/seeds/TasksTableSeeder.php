<?php

use Illuminate\Database\Seeder;
use App\Todoso;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Todoso::class, 5)->create();
    }
}
