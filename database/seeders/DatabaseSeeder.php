<?php

namespace Database\Seeders;

// use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
use WithoutModelEvents;

/**
* Seed the application's database.
*/
public function run(): void
{
// User::factory(10)->create();

// User::factory()->create([
//     'name' => 'Test User',
//     'email' => 'test@example.com',
// ]);

// $this->call(UserSeeder::class);
// $this->call(CountrySeeder::class);
// $this->call(SettingSeeder::class);
// $this->call(PermissionSeeder::class);
// $this->call(RoleSeeder::class);
// $this->call(RoleUserSeeder::class);
// $this->call(RoleUseradminSeeder::class);
// $this->call(CategorypageSeeder::class);
// $this->call(PageSeeder::class);
// $this->call(PostcategorySeeder::class);
// $this->call(TagSeeder::class);
// $this->call(UserspansaSeeder::class);
// $this->call(PostSeeder::class);
// $this->call(SliderspansaSeeder::class);



$this->call(AgamaSeeder::class);
$this->call(TahunajaranSeeder::class);
$this->call(JenisPtkSeeder::class);
$this->call(RefSemesterSeeder::class);
$this->call(RefPrestasiSeeder::class);
$this->call(RefTingkatPrestasiSeeder::class);
$this->call(RefJabatanTugasPegawaiSeeder::class);
$this->call(RefPangkatGolonganSeeder::class);
}
}