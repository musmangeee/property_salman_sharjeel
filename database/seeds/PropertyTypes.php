<?php

use Illuminate\Database\Seeder;
use App\PropertyTypeModel;

class PropertyTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyTypeModel::insert([
            [
                'id' => 1,
                'name' => 'Houses',
            ],
            [
                'id' => 2,
                'name' => 'Flats / Apartments',
            ],
            [
                'id' => 3,
                'name' => 'Bungalows',
            ],
            [
                'id' => 4,
                'name' => 'Land',
            ],
            [
                'id' => 5,
                'name' => 'Barn Conversion',
            ],
            [
                'id' => 6,
                'name' => 'Boats / Houseboat',
            ],
            [
                'id' => 7,
                'name' => 'Character Property',
            ],
            [
                'id' => 8,
                'name' => 'Contemporary',
            ],
            [
                'id' => 9,
                'name' => 'Cottage',
            ],
            [
                'id' => 10,
                'name' => 'Equestrian Property',
            ],
            [
                'id' => 11,
                'name' => 'Farms',
            ],
            [
                'id' => 12,
                'name' => 'Farmhouse',
            ],
            [
                'id' => 13,
                'name' => 'Houseboat / Boats',
            ],
            [
                'id' => 14,
                'name' => 'Investment',
            ],
            [
                'id' => 15,
                'name' => 'Lodge',
            ],
            [
                'id' => 16,
                'name' => 'Maisonette',
            ],
            [
                'id' => 17,
                'name' => 'Mobile / Park Home',
            ],
            [
                'id' => 18,
                'name' => 'Mews House',
            ],
            [
                'id' => 19,
                'name' => 'Retirement',
            ],
            [
                'id' => 20,
                'name' => 'Non-Retirement',
            ],
            [
                'id' => 21,
                'name' => 'Room Only',
            ],
            [
                'id' => 22,
                'name' => 'Penthouse',
            ],
            [
                'id' => 23,
                'name' => 'Plot Files',
            ],
            [
                'id' => 24,
                'name' => 'Retirement',
            ],
            [
                'id' => 25,
                'name' => 'Students',
            ],
            [
                'id' => 26,
                'name' => 'Swapping',
            ],
            [
                'id' => 27,
                'name' => 'Villa',
            ],
            [
                'id' => 28,
                'name' => 'Waterside',
            ],
        ]);
    }
}
