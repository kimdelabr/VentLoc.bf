<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'nom'=>"#magnifique"

        ]);

        Tag::create([
            'nom'=>"#bleu"

        ]);
        Tag::create([
            'nom'=>"#rouge"

        ]);

        Tag::create([
            'nom'=>"#super"

        ]);
        Tag::create([
            'nom'=>"#aziz"

        ]);
    }
}
