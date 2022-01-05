<?php

namespace Database\Seeders;

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
        \App\Models\Game::factory()->create(
            ["name" => "Muck"]
        );
        \App\Models\Game::factory()->create(
            ["name" => "Loly hunters 2, Fall of lolies"]
        );
        \App\Models\Game::factory()->create(
            ["name" => "IDK"]
        );
        //\App\Models\Game::factory(5)->create();
        \App\Models\Record::factory()->create(
            [
                "user_id" => 1,
                "game_id" => 1,
                "category" => "Any%",
                "time" => 155
            ]
        );
    }
}
