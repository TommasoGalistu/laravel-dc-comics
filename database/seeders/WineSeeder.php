<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;
use App\Function\Helper;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_string = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data_obj = json_decode($data_string);
        foreach($data_obj as $data){

            $new_wine = new Wine();
            $new_wine->slug = Helper::generateSlug($data->wine, Wine::class);
            $new_wine->winery = $data->winery;
            $new_wine->wine = $data->wine;
            $new_wine->average_rating = $data->rating->average;
            $new_wine->num_reviews = $data->rating->reviews	;
            $new_wine->url = $data->image;
            $new_wine->save();

        }

    }
}
