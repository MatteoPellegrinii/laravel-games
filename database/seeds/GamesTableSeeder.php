<?php

use App\Models\Game;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrGames = [
            [
                "id"    => 100,
                "img" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "title" => "Batman",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 2,
                "img" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "title" => "Robin",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 5,
                "img" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "title" => "Wonderwoman",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 6,
                "img" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "title" => "Superman",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
            [
                "id"    => 9,
                "img" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "title" => "Acquaman",
                "price" => 79,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda accusantium at iure magnam modi totam consectetur? Architecto, laborum hic. Voluptates rem ipsam totam odit unde officiis error excepturi harum."
            ],
        ];

        foreach ($arrGames as $game) {
            Game::create($game);
        }

    }
}
