<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Date\RailwayLine;

class RailwayLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = getFileJson('railway-line');
        foreach($data as $line)
        {
        	RailwayLine::create($line);
        }
    }
}
