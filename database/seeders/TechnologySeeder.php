<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ["label"=>"HTML", "color"=>"danger"],
            ["label"=>"CSS", "color"=>"info"],
            ["label"=>"JavaScript", "color"=>"warning"],
            ["label"=>"Bootstrap", "color"=>"btscolor"],
            ["label"=>"Vue", "color"=>"success"],
            ["label"=>"PHP", "color"=>"primary"],
            ["label"=>"SASS", "color"=>"sasscolor"],
            ["label"=>"Laravel", "color"=>"danger"],
        ];
        foreach($technologies as $technology){
            $new_technology=new Technology();
            $new_technology->label = $technology["label"];
            $new_technology->color = $technology["color"];
            $new_technology->save();
        }
    }
}