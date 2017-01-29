<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Profile;
// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
class ProfileTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
		$user = User::all();
		foreach($user as $index)
		{
			
			Profile::create([
				'user_id' =>$index->id,
				// 'name' => $faker->name,
				// 'mobile' => $faker->phoneNumber,
				// 'address' => $faker->address,
				// 'reference_code' => 'ADMIN',
				// 'ref_by' => null,
				'propic' => $faker->imageUrl($width = 640, $height = 480),
				'created_at' => $faker->dateTime($max ='now'),
				'updated_at' => $faker->dateTime($max ='now')
			]);
		}
    }
}