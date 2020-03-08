<?php

use Illuminate\Database\Seeder;
use App\UserTypes;

class UserTypesSeed extends Seeder
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
                'name' => 'User',
                'property_limit' => '3',
            ],
            [
                'id' => 2,
                'name' => 'Agent',
                'property_limit' => '5',

            ],
        ]);
    }
}
