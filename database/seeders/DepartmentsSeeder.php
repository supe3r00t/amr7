<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['name' => 'الدعم الفني', 'slug' => 'support'],
            ['name' => 'خدمة العملاء', 'slug' => 'customer-service'],
            ['name' => 'الفواتير', 'slug' => 'billing'],
            ['name' => 'الإدارة', 'slug' => 'management'],
        ];

        foreach ($departments as $dep) {
            Department::firstOrCreate(['slug' => $dep['slug']], $dep);
        }
    }
}
