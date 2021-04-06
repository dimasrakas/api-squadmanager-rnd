<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Models\Rnd\Tran;

class TransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 15000; $i++){

            DB::table('trans')->insert([
                'name' => '12312321',
                'group_id' => '123123',
                'score' => $faker->randomDigitNot(3),
                'date' => $faker->dateTimeThisYear('+2 months')
    		]);

    	}
    }
}
