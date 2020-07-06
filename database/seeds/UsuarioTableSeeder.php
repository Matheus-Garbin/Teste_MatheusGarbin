<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'usuario' =>'admin',
            'senha' => '$2y$10$wR/rJ/Mv4.y2cF.i4fgFruNnTB77wlquZLd4FzEF.0QV1kSHjEcDi',
        ]);
    }
}
