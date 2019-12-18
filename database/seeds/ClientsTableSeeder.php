<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Client::class, 5)->state(\App\Client::TYPE_PERSON_PHYSICAL)->create();
        factory(\App\Client::class, 5)->state(\App\Client::TYPE_PERSON_COMMPANY)->create();
    }
}
