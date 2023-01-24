<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('users')->insert([
            'name' => 'Brendan',
            'email' => 'brendan@thespia.com',
            'password' => Hash::make('dingo'),
        ]);

        DB::table('purposes')->insert([
            ['id' => 1,  'description' => 'Work'],
            ['id' => 2,  'description' => 'Education'],
            ['id' => 3,  'description' => 'Picking someone up or dropping off'],
            ['id' => 4,  'description' => 'Shopping'],
            ['id' => 5,  'description' => 'Eat or drink'],
            ['id' => 6,  'description' => 'Recreation'],
            ['id' => 7,  'description' => 'Personal business'],
            ['id' => 8,  'description' => 'Social visit'],
            ['id' => 9,  'description' => 'Home'],
            ['id' => 10, 'description' => 'Accommodation (away from home)'],
            ['id' => 11, 'description' => 'Airport'],
        ]);

        DB::table('places')->insert([
            
            ['purpose_id' => 1, 'place_id' => 1,  'description' => 'Usual workplace'],
            ['purpose_id' => 1, 'place_id' => 2,  'description' => 'Secondary work place'],
            ['purpose_id' => 1, 'place_id' => 3,  'description' => 'Client visit'],
            ['purpose_id' => 1, 'place_id' => 4,  'description' => 'Work - other'],

            ['purpose_id' => 2, 'place_id' => 1,  'description' => 'Attend secondary school'],
            ['purpose_id' => 2, 'place_id' => 2,  'description' => 'Attend university / tafe / college'],
            ['purpose_id' => 2, 'place_id' => 3,  'description' => 'Attend other education'],

            ['purpose_id' => 3, 'place_id' => 1,  'description' => 'Pick-up/drop off - kids to school / childcare'],
            ['purpose_id' => 3, 'place_id' => 2,  'description' => 'Kids to sports'],
            ['purpose_id' => 3, 'place_id' => 3,  'description' => 'Someone to work'],
            ['purpose_id' => 3, 'place_id' => 5,  'description' => 'Someone to a public transport stop (e.g. train station, bus stop)'],
            ['purpose_id' => 3, 'place_id' => 6,  'description' => 'Someone to an airport'],
            ['purpose_id' => 3, 'place_id' => 4,  'description' => 'Pick-up/drop off - other'],

            ['purpose_id' => 4, 'place_id' => 1,  'description' => 'Supermarket'],
            ['purpose_id' => 4, 'place_id' => 9,  'description' => 'Other grocery shopping (deli, butcher, bakery, fruit shop, etc)'],
            ['purpose_id' => 4, 'place_id' => 10, 'description' => 'Fashion'],
            ['purpose_id' => 4, 'place_id' => 14, 'description' => 'Department store'],
            ['purpose_id' => 4, 'place_id' => 4,  'description' => 'Pharmacy'],
            ['purpose_id' => 4, 'place_id' => 8,  'description' => 'Bottle shop / liquor store'],
            ['purpose_id' => 4, 'place_id' => 6,  'description' => 'Convenience store'],
            ['purpose_id' => 4, 'place_id' => 7,  'description' => 'Petrol station'],
            ['purpose_id' => 4, 'place_id' => 13, 'description' => 'Electronics store'],
            ['purpose_id' => 4, 'place_id' => 11, 'description' => 'Hardware / gardening'],
            ['purpose_id' => 4, 'place_id' => 12, 'description' => 'Furniture / homemaker'],
            ['purpose_id' => 4, 'place_id' => 5,  'description' => 'Shopping - other'],

            ['purpose_id' => 5, 'place_id' => 1,  'description' => 'Restaurant'],
            ['purpose_id' => 5, 'place_id' => 6,  'description' => 'Fast-food'],
            ['purpose_id' => 5, 'place_id' => 2,  'description' => 'Café / coffee shop (including take away)'],
            ['purpose_id' => 5, 'place_id' => 3,  'description' => 'Pub / club / RSL'],
            ['purpose_id' => 5, 'place_id' => 4,  'description' => 'Nightclub / bar'],
            ['purpose_id' => 5, 'place_id' => 5,  'description' => 'Other'],

            ['purpose_id' => 6, 'place_id' => 1,  'description' => 'Park'],
            ['purpose_id' => 6, 'place_id' => 2,  'description' => 'Cinema'],
            ['purpose_id' => 6, 'place_id' => 3,  'description' => 'Theatre / opera / ballet / comedy'],
            ['purpose_id' => 6, 'place_id' => 4,  'description' => 'Music venue'],
            ['purpose_id' => 6, 'place_id' => 5,  'description' => 'Stadium (watch sports / concert)'],
            ['purpose_id' => 6, 'place_id' => 6,  'description' => 'Golf'],
            ['purpose_id' => 6, 'place_id' => 7,  'description' => 'Amusement / theme park'],
            ['purpose_id' => 6, 'place_id' => 8,  'description' => 'Zoo / animal park'],
            ['purpose_id' => 6, 'place_id' => 9,  'description' => 'Gym'],
            ['purpose_id' => 6, 'place_id' => 10, 'description' => 'Sporting venue other than a gym'],
            ['purpose_id' => 6, 'place_id' => 11, 'description' => 'Library'],
            ['purpose_id' => 6, 'place_id' => 12, 'description' => 'Art gallery / museum'],
            ['purpose_id' => 6, 'place_id' => 13, 'description' => 'Beach'],
            ['purpose_id' => 6, 'place_id' => 14, 'description' => 'National park / nature reserve'],
            ['purpose_id' => 6, 'place_id' => 16, 'description' => 'Sporting venue other than a gym'],
            ['purpose_id' => 6, 'place_id' => 17, 'description' => 'Nightclub / bar'],
            ['purpose_id' => 6, 'place_id' => 18, 'description' => 'Casino'],
            ['purpose_id' => 6, 'place_id' => 15, 'description' => 'Other'],

            ['purpose_id' => 7, 'place_id' => 1,  'description' => 'GP - General practitioner'],
            ['purpose_id' => 7, 'place_id' => 2,  'description' => 'Hospital'],
            ['purpose_id' => 7, 'place_id' => 8,  'description' => 'Other health professional (dental, physio, psychologist, etc.)'],
            ['purpose_id' => 7, 'place_id' => 3,  'description' => 'Personal care (hairdresser / spa / nail salon, etc.)'],
            ['purpose_id' => 7, 'place_id' => 4,  'description' => 'Bank'],
            ['purpose_id' => 7, 'place_id' => 5,  'description' => 'Post office'],
            ['purpose_id' => 7, 'place_id' => 6,  'description' => 'Place of worship (church / mosque / temple, etc.)'],
            ['purpose_id' => 7, 'place_id' => 7,  'description' => 'Other personal business'],

            ['purpose_id' => 8, 'place_id' => 1,  'description' => 'Social visit'],

            ['purpose_id' => 9, 'place_id' => 1,  'description' => 'Go home'],

            ['purpose_id' => 10,'place_id' => 1,  'description' => 'Stay at other accommodation (e.g. hotel, airbnb, campsite)'],

            ['purpose_id' => 11,'place_id' => 1,  'description' => 'Pick-up / drop off someone to an airport'],
            ['purpose_id' => 11,'place_id' => 2,  'description' => 'To catch a flight'],

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
