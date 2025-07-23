<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $members = [
        [
            'name' => 'Nugraha Darmawan Natapradja',
            'bio' => 'Nugi Darmawan',
            'instagram' => 'https://www.instagram.com/nugrahadrmwn',
            'tiktok' => 'https://www.tiktok.com/@nugrahadrmwn',
            'youtube' => 'https://www.youtube.com/@NugrahaDarmawan',
            'channel_id' => 'UCAItfgP-LRSq5JckDPCbSow',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Fandra Octoramonth',
            'bio' => 'Octoramonth',
            'instagram' => 'https://www.instagram.com/octoramonth/',
            'tiktok' => 'https://www.tiktok.com/@fandraoctora',
            'youtube' => 'https://www.youtube.com/@FandraOcto',
            'channel_id' => 'UCbuiDvTnG1P3GduXnm-jHmw',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Hans Rattlexnake',
            'bio' => 'The Jooomers',
            'instagram' => 'https://www.instagram.com/hansrattlexnake/',
            'tiktok' => 'https://www.tiktok.com/@hansrattlexnake',
            'youtube' => 'https://www.youtube.com/@TheJooomers',
            'channel_id' => 'UC8aFSTbi7yYWFhcNKuey5kg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Fernandes Petra',
            'bio' => 'Kho Petra',
            'instagram' => 'https://www.instagram.com/fernandespetra/',
            'tiktok' => 'https://www.tiktok.com/@fernandespetra',
            'youtube' => 'https://www.youtube.com/@KhoPetra',
            'channel_id' => 'UC2nxo8bTavhg0MeSdvguDHw',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Dicky Rivaldi Pratama',
            'bio' => 'Dbangkongs',
            'instagram' => 'https://www.instagram.com/dickyrtama/',
            'tiktok' => 'https://www.tiktok.com/@dbangkongsss',
            'youtube' => 'https://www.youtube.com/@DBangkongS',
            'channel_id' => 'UCsXggSz7yyj3yAKTBPKJOhw',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Vectora Rosida Meriana',
            'bio' => 'Queenuts',
            'instagram' => 'https://www.instagram.com/queeenuts',
            'tiktok' => 'https://www.tiktok.com/@queeenuts',
            'youtube' => 'https://www.youtube.com/@Queenuts',
            'channel_id' => 'UCl0g_aerCGirbQGnpfkQDXg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sanrio Oseanno',
            'bio' => 'Oseanz',
            'instagram' => 'https://www.instagram.com/oseanz',
            'tiktok' => 'https://www.tiktok.com/@oseanz',
            'youtube' => 'https://www.youtube.com/@oseanz',
            'channel_id' => 'UC1-3SNR8NIImLlqVrJRmqkA',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Juan',
            'bio' => 'Juanicho',
            'instagram' => 'https://www.instagram.com/juanicho_',
            'tiktok' => 'https://www.tiktok.com/@juanicho_',
            'youtube' => 'https://www.youtube.com/@juanicho_',
            'channel_id' => 'UCy5eovXrYVx0DDKo0C2fiBA',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Rian Pradana',
            'bio' => 'King Macbeth',
            'instagram' => 'https://www.instagram.com/iandipra',
            'tiktok' => 'https://www.tiktok.com/@kingmakmet',
            'youtube' => 'https://www.youtube.com/@iandipra',
            'channel_id' => 'UC5Vd9s68jAlN7XKfB8WpPRQ',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Luthfi Al',
            'bio' => 'BUYUNG',
            'instagram' => 'https://www.instagram.com/luthfiiall/',
            'tiktok' => 'https://www.tiktok.com/@luthfiialll',
            'youtube' => 'https://www.youtube.com/@luthfiiall',
            'channel_id' => 'UCHJwK84eNxgMSys7zDJ7sPQ',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($members as $member) {
        Member::create($member);
    }
}

}
