<?php

use Illuminate\Database\Seeder;
use App\Rol;

class rolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         factory(Rol::class, 40)->create();
    }
}
