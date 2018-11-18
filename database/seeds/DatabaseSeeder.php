<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 3)->create()->each(function($u){
            $u->questions()
                ->saveMany(
                    factory(App\Models\Question::class, rand(1, 5))->make() //create method insert records into database while make method generate object and store it memeory
                );
        });
        //factory(App\Models\Question::class, 10)->create();
    }
}
