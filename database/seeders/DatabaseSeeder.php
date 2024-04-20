<?php

namespace Database\Seeders;

use App\Models\Music;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Suyeon',
            'password'=>'test1',
            'email' => 'test@example.com',
            'role' => 'admin',
        ]);

        $user2 = User::create([
            'name' => 'Suyeon2',
            'password'=>'test1',
            'email' => 'test2@example.com',
        ]);

        Music::create([
            'title' => 'blessing in disguise',
            'artist' => 'HUH YUNJIN',
            'album_title' => 'blessing in disguise - Single',
            'genre' => 'K-POP',
            'release_date' => '2023-08-14',
            'length' => '00:03:47',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/25/d1/8b/25d18b1d-55e6-1dde-295e-79e55aee3b86/196922586767_Cover.jpg/600x600bb-60.jpg',
            'user_id' => $user1->id,
        ]);

        Music::create([
            'title' => 'Broke Boy',
            'artist' => 'Malia Civetz',
            'album_title' => 'Broke Boy - Single',
            'genre' => 'POP',
            'release_date' => '2020-02-28',
            'length' => '00:02:53',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/a9/4e/19/a94e1934-8a57-50bc-c951-f07848321478/054391942173.jpg/600x600bb-60.jpg',
            'user_id' => $user1->id,
        ]);

        Music::create([
           'title' => 'Still New York',
            'artist' => 'MAX, Leslie Grace & Joey Bada$$',
            'album_title' => 'Still New York - Single',
            'genre' => 'POP',
            'release_date' => '2018-11-07',
            'length' => '00:03:49',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music128/v4/8e/5d/28/8e5d2801-f499-3709-0e1f-e664cf321921/886447381588.jpg/600x600bb-60.jpg',
            'user_id' => $user1->id,
        ]);

        Music::create([
            'title' => 'Find My Own Way(feat. Wiz Califa)',
            'artist' => 'GRiZ',
            'album_title' => 'Ride Waves',
            'genre' => 'Electronic',
            'release_date' => '2019-04-05',
            'length' => '00:05:03',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/a6/28/21/a628210f-dc09-8589-78a5-755e1ead910b/192641247729_Cover.jpg/600x600bb-60.jpg',
            'user_id' => $user1->id,
        ]);

        Music::create([
            'title' => "I Don't Think That I Like Her",
            'artist' => 'Charlie Puth',
            'album_title' => 'Broke Boy - Single',
            'genre' => 'CHARLIE',
            'release_date' => '2022-09-16',
            'length' => '00:03:09',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/7e/5f/22/7e5f2239-6143-7cf4-dfe1-d9b53d47c4c0/075679736307.jpg/600x600bb-60.jpg',
            'user_id' => $user1->id,
        ]);

        Music::create([
            'title' => "I Don't Think That I Like Her",
            'artist' => 'Charlie Puth',
            'album_title' => 'Broke Boy - Single',
            'genre' => 'CHARLIE',
            'release_date' => '2022-09-16',
            'length' => '00:03:09',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/7e/5f/22/7e5f2239-6143-7cf4-dfe1-d9b53d47c4c0/075679736307.jpg/600x600bb-60.jpg',
            'user_id' => $user2->id,
        ]);

        Music::create([
            'title' => "I Don't Think That I Like Her",
            'artist' => 'Charlie Puth',
            'album_title' => 'Broke Boy - Single',
            'genre' => 'CHARLIE',
            'release_date' => '2022-09-16',
            'length' => '00:03:09',
            'album_cover' => 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/7e/5f/22/7e5f2239-6143-7cf4-dfe1-d9b53d47c4c0/075679736307.jpg/600x600bb-60.jpg',
            'user_id' => $user2->id,
        ]);
    }
}
