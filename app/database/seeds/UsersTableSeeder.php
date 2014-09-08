<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		Sentry::createGroup(array(
		    'name'        => 'Admin',
		    'permissions' => [],
		));

		Sentry::createGroup(array(
		    'name'        => 'members',
		    'permissions' => [],
		));

		$users = 
			[
				[
					'email'     => 'imran.farid.s@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'mishu@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'stackoverflow@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'sabbir@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'sadaf@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'enola@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'alif@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
        		[
					'email'     => 'sonnet@gmail.com',
        			'password'  => 'pass',
        			'activated' => true,
        		],
			];

			foreach ($users as $user) {
				Sentry::createUser($user);
			}


			//assigning admin permissions.
			$adminGroup = Sentry::findGroupById(1);
			$user = Sentry::findUserById(1);
			$user->addGroup($adminGroup);
			$user->save();

			$user = Sentry::findUserById(2);
			$user->addGroup($adminGroup);
			$user->save();

			$user = Sentry::findUserById(3);
			$user->addGroup($adminGroup);
			$user->save();

			$userGroup = Sentry::findGroupById(2);

			$user = Sentry::findUserById(4);
			$user->addGroup($userGroup);
			$user->save();

			$user = Sentry::findUserById(5);
			$user->addGroup($userGroup);
			$user->save();

			$user = Sentry::findUserById(6);
			$user->addGroup($userGroup);
			$user->save();

			$user = Sentry::findUserById(7);
			$user->addGroup($userGroup);
			$user->save();

			$user = Sentry::findUserById(8);
			$user->addGroup($userGroup);
			$user->save();

	}

}