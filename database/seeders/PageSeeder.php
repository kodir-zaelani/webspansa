<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/pages.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Page::create([
                'pagecategory_id' => $obj->categorypage_id,
                'title'           => $obj->title,
                'slug'            => $obj->slug,
                'content'         => $obj->content,
                'image'           => $obj->image ?? null,
                'caption_image'   => $obj->caption_image ?? null,
                'video'           => $obj->video ?? null,
                'caption_video'   => $obj->caption_video ?? null,
                'masterstatus'    => $obj->masterstatus ?? false,
                'status'          => $obj->status ?? true,
                'view_count'      => $obj->view_count ?? 0,
                'updated_by'      => $obj->updated_by ?? null,
                'deleted_by'      => $obj->deleted_by ?? null,
                'created_at'      => $obj->created_at,
                'updated_at'      => $obj->updated_at,
            ]);
        }
    }
}