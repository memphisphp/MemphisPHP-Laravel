<?php

class SponsorsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sponsors')->truncate();

		$sponsors = array(
            'name' => 'Vaco',
            'link' => 'http://www.vaco.com/memphis/team/diane-tabulog',
            'imgLink' => 'vaco.jpeg',
            'active' => '1',
            'description' => 'Memphis IT Recruiter',
		);
        DB::table('sponsors')->insert($sponsors);

        $sponsors = array(
            'name' => 'Modern Services Inc',
            'link' => 'http://www.modernservicesinc.com/',
            'imgLink' => 'modernservicesinc.jpeg',
            'active' => '1',
            'description' => 'Memphis Area IT Firm. Specializing in Application Development, Cabling Infrastructure,' .
                                ' Networking, and Server Support',
        );
        DB::table('sponsors')->insert($sponsors);
	}

}
