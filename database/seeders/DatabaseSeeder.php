<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Site;
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

        Site::create([
            'title' => 'Site 14!',
            'tags' => 'southern, nearby water',
            'location' => 'Pinhoti Trail, Alabama',
            'description' => 'This is a grand ole campsite with lots of bears and squirrels',
            'directions' => 'Its a secret!'
        ]);

        Site::create([
            'title' => 'Sweet Home Nebraska',
            'tags' => 'dusty, spooky',
            'location' => 'Lincoln, Nebraska',
            'description' => 'Not too much to see but it works',
            'directions' => "It\'s on the side of the interstate"
        ]);
    }
}
