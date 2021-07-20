<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config("comic");

        foreach ($arrayComics as $item) {
        $comic =  new Comic();

        $comic->slug = Str::slug($item['title']);
        $comic->title = $item['title'];
        $comic->type = $item['type'];
        $comic->thumb = $item['thumb'];
        $comic->price = $item['price'];
        $comic->series = $item['series'];
        $comic->description = $item['description'];
        $comic->sale_date = $item['sale_date'];

        $comic->save();
        }
    }
}
