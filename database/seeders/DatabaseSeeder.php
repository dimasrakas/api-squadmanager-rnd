<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Faker\Factory as Faker;
use App\Models\Rnd\Tran;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 10000; $i++){

            \DB::table('trans')->insert([
                'name' => '12312321',
                'group_id' => '123123',
                'score' => $faker->randomDigitNot(3),
                'date' => $faker->dateTimeThisYear('+2 months')
    		]);

    	}
    }
}
