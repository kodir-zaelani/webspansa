<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SliderspansaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/sliders.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Slider::create([
                'title'          => $obj->title,
                'short_title'    => $obj->short_title,
                'slug'           => $obj->slug,
                'excerpt'        => $obj->excerpt,
                'post_id'        => $obj->post_id  ?? null,
                'link'           => $obj->link  ?? null,
                'target'         => $obj->target  ?? null,
                'image'          => $obj->image  ?? null,
                'video'          => $obj->video  ?? null,
                'show_attribute' => $obj->show_attribute ?? false,
                'status'         => $obj->status ?? true,
                'statusbanner'   => $obj->statusbanner ?? false,
                'published_at'   => $obj->published_at ?? null,
                'created_at'     => $obj->created_at,
                'updated_at'     => $obj->updated_at,
            ]);
        }
    }
}
