<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NoticiaTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Noticia::create(array(
                'titulo'=>$faker->sentence($nbWords = 6),
                'contenido'=>$faker->text,
                'fechaPublicacion'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'activo'=>$faker->boolean,
                'idusuario'=>$faker->randomDigit
            ));
		}
	}

}