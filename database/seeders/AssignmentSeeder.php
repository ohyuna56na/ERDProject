<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    public function run()
    {
        Assignment::factory(10)->create();
    }
}
