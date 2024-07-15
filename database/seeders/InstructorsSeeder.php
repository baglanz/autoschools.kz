<?php

namespace Database\Seeders;

use App\Models\Instructors;
use Illuminate\Database\Seeder;

class InstructorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instructors::factory(10)->create();
    }
}
