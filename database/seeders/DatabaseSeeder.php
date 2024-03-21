<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Record::truncate();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        info('Токен: ' . substr($user->createToken('token')->plainTextToken, 2));

        Record::factory()
            ->count(10)
            ->state(new Sequence(
                ['access' => true],
                ['access' => false],
            ))
            ->create();
    }
}
