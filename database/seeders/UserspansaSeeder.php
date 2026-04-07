<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserspansaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/users_uuid.json');
        $data = json_decode($json);

        foreach($data as $obj){
            User::create([
            'id'                => $obj->id,
            'name'              => $obj->name,
            'email'             => $obj->email,
            'email_verified_at' => $obj->email_verified_at ?? null,
            'slug'              => Str::slug($obj->name) . '-' . time(),
            'password'          => bcrypt('12345678!'),
            'bio'               => $obj->bio  ?? null,
            'image'             => $obj->photo  ?? null,
            'status'            => $obj->status ?? true,
            'masterstatus'      => $obj->masterstatus ?? false,
            'remember_token'    => $obj->remember_token ?? null,
            'created_at'        => $obj->created_at,
            'updated_at'        => $obj->updated_at,
            ]);
        }
    }
}
