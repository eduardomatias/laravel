<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('times')->delete();
        $times = array(
            array('nome' => 'Alemanha'),
            array('nome' => 'Arábia Saudita'),
            array('nome' => 'Argentina'),
            array('nome' => 'Austrália'),
            array('nome' => 'Brasil'),
            array('nome' => 'Bélgica'),
            array('nome' => 'Colômbia'),
            array('nome' => 'Coréia do Sul'),
            array('nome' => 'Costa Rica'),
            array('nome' => 'Croácia'),
            array('nome' => 'Dinamarca'),
            array('nome' => 'Egito'),
            array('nome' => 'Espanha'),
            array('nome' => 'França'),
            array('nome' => 'Inglaterra'),
            array('nome' => 'Irã'),
            array('nome' => 'Islândia'),
            array('nome' => 'Japão'),
            array('nome' => 'Marrocos'),
            array('nome' => 'México'),
            array('nome' => 'Nigéria'),
            array('nome' => 'Panamá'),
            array('nome' => 'Peru'),
            array('nome' => 'Polônia'),
            array('nome' => 'Portugal'),
            array('nome' => 'Rússia'),
            array('nome' => 'Senegal'),
            array('nome' => 'Sérvia'),
            array('nome' => 'Suíça'),
            array('nome' => 'Suécia'),
            array('nome' => 'Tunísia'),
            array('nome' => 'Uruguai'),
        );
        DB::table('times')->insert($times);

    }
}
