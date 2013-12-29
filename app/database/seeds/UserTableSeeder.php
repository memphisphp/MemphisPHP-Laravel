<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

        Eloquent::unguard();

        $faker = Faker\Factory::create();

        //Create Admin(s)
        $user = Sentry::createUser(array(
            'email' => 'joe@joeferguson.me',
            'password' => '1234',
            'activated'   => true,
            'permissions' => array(
                'user.create' => 1,
                'user.delete' => 1,
                'user.view'   => 1,
                'user.update' => 1,
            ),
        ));

        // Create Fake users
        foreach(range(1, 4) as $index)
        {
            $this_user = $faker->userName;

            $user = Sentry::createUser(array(
                'email' => $faker->email,
                'password' => $faker->word,
                'activated'   => true,
                'permissions' => array(
                    'user.create' => -1,
                    'user.delete' => -1,
                    'user.view'   => 1,
                    'user.update' => 1,
                ),
            ));
        }

	}

}
