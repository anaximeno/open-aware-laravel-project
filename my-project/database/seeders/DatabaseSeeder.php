<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\User;
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
        for ($i = 0 ; $i < 10 ; $i += 1) {
            User::factory(1)->has(Project::factory()
                ->count(rand(0, 3))
                ->state(function (array $attributes, User $user) {
                    return ['creator_id' => $user->id];
                }))->create();
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
