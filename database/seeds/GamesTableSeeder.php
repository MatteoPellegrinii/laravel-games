<?php

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $arrGames = [
            [
                "id"    => 100,
                "img" => "https://i.ebayimg.com/images/g/mLIAAOxyHslQ84H5/s-l600.jpg",
                "title" => "Batman and Robin",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 2,
                "img" => "https://m.media-amazon.com/images/I/71ydXZvq+5L._AC_SX466_.jpg",
                "title" => "Spyro",
                "price" => 149,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 5,
                "img" => "https://preview.redd.it/z1l0li1qacl41.jpg?auto=webp&s=761eabceb52eff4d0ac33f4c7c264d903f268ba9",
                "title" => "Carlos el Topo que gira",
                "price" => 139,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
        ];

        $userId = User::all()->pluck('id');

        // foreach ($arrGames as $game) {
        //     Game::create($game);
        //     $game = new Game;
        //     $game->user_id = $faker->randomElement($userId);
        //     $game->save();
        // }

        for ($i = 0; $i < 3; $i++) {
            $game = new Game;
            $game->id = $faker->randomNumber(1, 200);
            $game->img = 'bla';
            $game->title = 'bla';
            $game->price = 34;
            $game->description = 'bla';
            $game->user_id = $faker->randomElement($userId);
            $game->save();
        }



    }
}
