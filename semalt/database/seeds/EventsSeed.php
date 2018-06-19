<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
           ['caption' =>'Atlas Weekend 2017'],
           ['caption' =>'Грин Грей (Green Grey)']
        ]);
    }
}
