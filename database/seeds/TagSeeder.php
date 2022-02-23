<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["carne", "pesce", "vegan", "senza lattosio", "carboidrati", "sano"];

        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->name =  $tag;
            $newTag->slug = Str::of($newTag->name)->slug("-");
            $newTag->save();
        }
    }
}
