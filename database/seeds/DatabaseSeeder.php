<?php

use App\Ingrediente;
use App\IngredienteReceta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(IngredienteTableSeeder::class);
        $this->call(RecetaTableSeeder::class);
        $this->call(IngredienteRecetaTableSeeder::class);
        
    }
}
