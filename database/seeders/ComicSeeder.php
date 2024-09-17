<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Function\Helper;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');
        foreach($data as $hero){
            $new_hero = new Comic();
            $new_hero->title = $hero['title'];
            $new_hero->description = $hero['description'];
            $new_hero->thumb = $hero['thumb'];
            $new_hero->price = $hero['price'];
            $new_hero->series = $hero['series'];
            $new_hero->slug = Helper::generateSlug($new_hero->title, Comic::class);
            $new_hero->sale_date = $hero['sale_date'];
            $new_hero->type = $hero['type'];
            $new_hero->save();

        }

    }
}
