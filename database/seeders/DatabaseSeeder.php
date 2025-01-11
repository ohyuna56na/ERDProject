<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StudentSeeder::class,
            InstructorSeeder::class,
            CourseSeeder::class,
            EnrollmentSeeder::class,
            AssignmentSeeder::class,
        ]);
    }
}
