<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    protected Collection $keyValues;

    public function __construct()
    {
        parent::__construct();
        $this->keyValues = collect(array_fill(0, 10, null))->map(fn () => [fake()->safeColorName(), fake()->safeColorName()]);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'access' => true,
            'data' => $this->generateData()
        ];
    }

    protected function generateData(): object
    {
        $data = [];

        foreach ($this->keyValues->shuffle()->take(rand(1, 10)) as [$key, $value]) {
            $data[$key] = $value;
        }

        return (object) $data;
    }
}
