<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
         \App\Models\User::factory(10)->create();

         Listing::factory(7)->create();

      /*   Listing::create([
            'title' => 'Test bro',
            'tags' => 'php, js',
            'company' => 'secret',
            'location' => 'mgá-pr',
            'email' => 'test@test.com',
            'website' => 'https://www.google.com',
            'description' => 'big desc right here!'
         ]);
         Listing::create([
            'title' => 'Test bro2',
            'tags' => 'php, js2',
            'company' => 'secret2',
            'location' => 'mgá-pr2',
            'email' => 'test@test.com2',
            'website' => 'https://www.google.com2',
            'description' => 'big desc right here!2'
         ]); 
         */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
