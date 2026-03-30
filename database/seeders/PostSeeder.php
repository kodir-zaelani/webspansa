<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/posts_2.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Post::create([
                'author_id'       => $obj->author_id,
                'title'           => $obj->title,
                'slug'            => $obj->slug,
                'headline'        => $obj->headline ?? false,
                'selection'       => $obj->selection ?? false,
                'postcategory_id' => $obj->categorypost_id,
                'content'         => $obj->content,
                'excerpt'         => $obj->excerpt ?? null,
                'image'           => $obj->image ?? null,
                'image_watermark' => $obj->image_watermark ?? null,
                'caption_image'   => $obj->caption_image ?? null,
                'video'           => $obj->video ?? null,
                'caption_video'   => $obj->caption_video ?? null,
                'status'          => $obj->status ?? true,
                'comment_status'  => $obj->comment_status ?? false,
                'view_count'      => $obj->view_count ?? 0,
                'statuspost'      => $obj->statuspost ?? 0,
                'published_at'    => $obj->published_at ?? null,
                'updated_by'      => $obj->author_id ?? null,
                'deleted_by'      => $obj->deleted_by ?? null,
                'deleted_at'      => $obj->deleted_at ?? null,
                'created_at'      => $obj->created_at,
                'updated_at'      => $obj->updated_at,
            ]);
        }
    }
}
