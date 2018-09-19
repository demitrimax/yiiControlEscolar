<?php

namespace app\commands;

use yii\console\Controller;
use app\models\Tipoequipo;
use yii\db\Migration;


class SeedController extends \yii\web\Controller
{
	public function actionIndex()
	{
		$seeder = new \tebazil\yii2seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();

		/* $seeder->table('article')->columns([
		    'id', //automatic pk
		    'book_id', //automatic fk
		    'name'=>$faker->firstName,
		    'content'=>$faker->text
		        ])->rowQuantity(30);


		$seeder->table('book')->columns([
		    'id',
		    'name'=>$faker->text(20),
		])->rowQuantity(30);

		$seeder->table('category')->columns([
		    'id',
		    'book_id',
		    'name'=>$faker->text(20),
		    'type'=>$faker->randomElement(['shop','cv','test']),
		])->rowQuantity(30); */
		$array = [
			['ntipo' => 'BARCOPERF', 'descripcion' => 'Barco perforador'],
			['ntipo' => 'MOD', 'descripcion' => 'Modular'],
			['ntipo' => 'A/E', 'descripcion' => 'Autoelevable'],
			['ntipo' => 'S/S', 'descripcion' => 'Semisumergible'],
			['ntipo' => 'FIJO', 'descripcion' => 'Terrestre'],
			['ntipo' => 'LACUSTRE', 'descripcion' => 'Lacustre'],
			['ntipo' => 'ALIG', 'descripcion' => 'Aligerado'],
			['ntipo' => 'SNUB', 'descripcion' => 'Snubbing'],
			['ntipo' => 'FIJO', 'descripcion' => 'TRP'],
			['ntipo' => 'EMP', 'descripcion' => 'Empaquetado']
		];
		$seeder->table('tipoequipo')->data($array);

		$seeder->refill();
	}
	
}
