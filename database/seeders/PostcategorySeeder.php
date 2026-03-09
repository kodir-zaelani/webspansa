<?php

namespace Database\Seeders;

use App\Models\Postcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/categoryposts.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Postcategory::create([
                'parent_id'   => $obj->parent_id ?? null,
                'title'        => $obj->title,
                'slug'         => $obj->slug,
                'masterstatus' => $obj->masterstatus ?? false,
                'status'       => $obj->status ?? true,
                'image'        => $obj->image ?? null,
                'created_at'   => $obj->created_at,
                'updated_at'   => $obj->updated_at,
            ]);
        }
    }
}
