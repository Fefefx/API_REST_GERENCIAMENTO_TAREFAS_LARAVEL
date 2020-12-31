<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Mudou na nova versão
        factory(App\Task::class)->create([
            'name' => 'Estudar PHP',
            'complete' => false
        ]);

        factory(App\Task::class)->create([
            'name' => 'Estudar JavaScript',
            'complete' => false
        ]);
        
        factory(App\Task::class)->create([
            'name' => 'Estudar Laravel',
            'complete' => false
        ]);

        */
    }
}
