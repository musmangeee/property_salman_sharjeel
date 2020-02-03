<?php

use Illuminate\Database\Seeder;
use App\UnitModel;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitModel::insert([
            [
                'id' => 1,
                'name' => 'Square Feet',
            ],
            [
                'id' => 2,
                'name' => 'Square Meters',
            ],
            [
                'id' => 3,
                'name' => 'Square Yards',
            ],
            [
                'id' => 4,
                'name' => 'Acres',
            ],
            [
                'id' => 5,
                'name' => 'Hectares',
            ],
        ]);
    }
}
