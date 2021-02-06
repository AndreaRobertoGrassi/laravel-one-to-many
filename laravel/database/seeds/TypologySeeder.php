<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Typology::class, 10)
            -> create() 
            -> each(function($typ){
            $tasks = Task::inRandomOrder() ->limit(rand(1,5))->get();
            $typ -> tasks() -> attach($tasks);      //attach aggiunge le $tasks a typology
        });
    }
}
