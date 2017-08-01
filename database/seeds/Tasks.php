<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class Tasks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task')->insert([
            'name' => str_random(10),
            'date_created' => '11111'
        ]);
    }
}
