<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travel');

        foreach ($arrayTravel as $item) {
           
            $travel = new Travel();

            $travel->locality = $item['locality'];
            $travel->price = $item['price'];
            $travel->number_of_rooms = $item['number_of_rooms'];
            $travel->people = $item['people'];
            $travel->hotel = $item['hotel'];
            $travel->vote = $item['vote'];

            $travel->save();
        }
    }
}
