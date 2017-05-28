<?php

use Illuminate\Database\Seeder;
use App\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $otley = new Location([
          'label' => 'Otley',
          'timezone' => 'Europe/London',
          'lat' => '53.90553',
          'long' => '-1.69383'
        ]);
        $otley->save();

        $bristol = new Location([
          'label' => 'Bristol',
          'timezone' => 'Europe/London',
          'lat' => 51.454514,
          'long' => -2.587910
        ]);
        $bristol->save();

        $bristol->delete();

        $austin = new Location([
          'label' => 'Austin',
          'timezone' => 'America/Chicago',
          'lat' => 30.307182,
          'long' => -97.755996
        ]);
        $austin->save();
    }
}
