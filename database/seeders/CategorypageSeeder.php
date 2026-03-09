<?php

namespace Database\Seeders;

use App\Models\Pagecategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorypageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/categorypages.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Pagecategory::create([
                'categoryid'   => $obj->id,
                'title'        => $obj->title,
                'slug'         => $obj->slug,
                'image'        => $obj->image ?? null,
                'masterstatus' => $obj->masterstatus ?? false,
                'status'       => $obj->status ?? true,
                'created_at'   => $obj->created_at,
                'updated_at'   => $obj->updated_at,
            ]);
        }
    }
}