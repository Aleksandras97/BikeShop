<?php

use Illuminate\Database\Seeder;
use App\Models\Detale;

class DetaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Detale::truncate();

      Detale::create([
        'pavadinimas' => 'Pipelock',
        'aprasymas' => 'Pipelock™ collets expand radially and lock into the frame, creating the widest and most rigid pivot stance possible. Using Pipelock collets allows us to lower our front triangle pivot-weights while maximizing lateral stiffness.',
        'kiekis' => 20,
        'kaina' => 30,
        'prekeszenklas' => 'Shimano',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/large/public/technology/pipelock_0.jpg?itok=4wi86D-E',
        'approved' => false
      ]);

      Detale::create([
        'pavadinimas' => 'BC2',
        'aprasymas' => 'Lighter and stiffer than conventional bearing pivots, BC2™ pivots are the next generation of our ABC system. Unlike other bushings, our patented system controls the contact of the bushing surfaces, reducing stiction and binding. BC2™ pivots feature grease ports for effortless maintenance.',
        'kiekis' => 14,
        'kaina' => 29,
        'prekeszenklas' => 'Shimano',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/large/public/technology/bc2pivots.jpg?itok=_Th94a2Q',
        'approved' => false
      ]);

      Detale::create([
        'pavadinimas' => 'MID-DRIVE SLIDER',
        'aprasymas' => 'Your Powerplay bike uses a mid-drive slider to control the force of the chain and direct it to the drive pinion.',
        'kiekis' => 100,
        'kaina' => 29.99,
        'prekeszenklas' => 'Shimano',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/large/public/technology/2020_Powerplay_Motor_Center_BW_LR.jpg?itok=QdErwr4t',
        'approved' => false
      ]);
    }
}
