<?php

use Illuminate\Database\Seeder;
use App\Models\Dviratis;

class DviratisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Dviratis::truncate();

      Dviratis::create([
        'pavadinimas' => 'Element',
        'aprasymas' => 'Designed to excel at the pinnacle of short track racing, the Element XCO Edition features a special build for even more aggressive XC race geometry and lighter weight',
        'kiekis' => 15,
        'kaina' => 9399,
        'prekeszenklas' => 'Carbon 90',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/homeslide_tall/public/hero/Web_MY20_Element_C90_C1_Hero.jpg?itok=oVvLpOjH',
        'approved' => false
      ]);

      Dviratis::create([
        'pavadinimas' => 'Vertex',
        'aprasymas' => 'Its lightweight frame provides incredible stiffness and rolling speed, while its modern, aggressive geometry inspires confidence everywhere on the racecourse—even technical corners and descents.',
        'kiekis' => 15,
        'kaina' => 6799,
        'prekeszenklas' => 'Carbon 90',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/homeslide_tall/public/hero/Web_MY20_Vertex_C90_Hero_0.jpg?itok=ydz-XzM_',
        'approved' => false,
      ]);

      Dviratis::create([
        'pavadinimas' => 'Instinct',
        'aprasymas' => 'Designed with an optimized single-position link, ultra-aggressive geometry, and a long stroke shock that provides 155mm of rear travel',
        'kiekis' => 5,
        'kaina' => 4999,
        'prekeszenklas' => 'Alloy',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/homeslide_tall/public/hero/Web_MY20_Instinct_C90_BC_C1_Hero.jpg?itok=6H2clzsJ',
        'approved' => false
      ]);

      Dviratis::create([
        'pavadinimas' => 'Edge',
        'aprasymas' => 'Starting with an easy to maneuver run bike, the Edge series offers a wheelsize for any young rider.',
        'kiekis' => 50,
        'kaina' => 319,
        'prekeszenklas' => 'Rocky',
        'nuotrauka' => 'https://www.bikes.com/sites/default/files/styles/homeslide_tall/public/hero/Web_MY20_Edge_26_Hero_0.jpg?itok=fXa0o78c',
        'approved' => false
      ]);
    }
}
