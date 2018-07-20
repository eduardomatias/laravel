<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('pt_BR');
        // $this->call(UsersTableSeeder::class);
        DB::table('times')->delete();
        $times = array(
            array('nome' => 'Alemanha', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Arábia Saudita', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Argentina', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Austrália', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Brasil', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Bélgica', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Colômbia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Coréia do Sul', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Costa Rica', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Croácia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Dinamarca', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Egito', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Espanha', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'França', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Inglaterra', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Irã', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Islândia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Japão', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Marrocos', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'México', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Nigéria', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Panamá', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Peru', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Polônia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Portugal', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Rússia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Senegal', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Sérvia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Suíça', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Suécia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Tunísia', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
            array('nome' => 'Uruguai', 'mascote' => $faker->firstName(), 'fundado_em' => $faker->date()),
        );
        DB::table('times')->insert($times);

    }
}
