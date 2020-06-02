<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('tests')->insert([
            ['name'=>'Laravel 1','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel2','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel3','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel4','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel5','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel6','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel7','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel8','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel9','password' => bcrypt('toilahoa')],
            ['name'=>'Laravel10','password' => bcrypt('toilahoa')],
        ]);
    }
}
