<?php

namespace Database\Seeders;

use App\Models\AnnouncementType;
use Illuminate\Database\Seeder;

class AnnouncementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnnouncementType::factory()->create([
            'name' => 'สายวิชาการ'
        ]);
        AnnouncementType::factory()->create([
            'name' => 'สายสนับสนุน'
        ]);
    }
}
