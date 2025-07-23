<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => '🎌 Comifuro 18: Lebih Gede, Lebih Rame!',
                'description' => 'Comifuro (Comic Frontier) kembali menghadirkan festival budaya pop Jepang terbesar di Indonesia! Bertemu langsung dengan kreator lokal, cosplayer favoritmu, dan temukan merchandise eksklusif hanya di Comifuro 18!',
                'start_date' => '2025-11-15',
                'end_date' => '2025-11-16',
                'time' => '11:00:00',
                'location' => 'ICE BSD City, Tangerang Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    
        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
