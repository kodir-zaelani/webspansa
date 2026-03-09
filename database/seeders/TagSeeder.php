<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $json = File::get('database/data_json/tags.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Tag::create([
                'title'        => $obj->title,
                'slug'         => $obj->slug,
                'masterstatus' => $obj->masterstatus ?? false,
                'created_at'   => $obj->created_at,
                'updated_at'   => $obj->updated_at,
            ]);
        }
    }
}
