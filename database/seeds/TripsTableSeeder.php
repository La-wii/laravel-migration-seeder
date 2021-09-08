<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            $viaggi = new Trip();
            $viaggi->name = 'Vacanza numero' . rand(1,100);
            $viaggi->city = 'Città numero' . rand(1,100);
            $viaggi->description = 'Descrizione viaggio:' . 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id tenetur, consequatur nemo corporis esse modi. Consequuntur amet vero iusto.';
            $viaggi->price = rand(1,100);
            $viaggi->save();
        }
    }
}
