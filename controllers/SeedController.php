<?php

namespace app\controllers;
use app\models\Tipoequipo;
//use yii\db\Migration;

class SeedController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $seeder = new \tebazil\yii2seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();
		/* $array = [
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
		]; */

				$array = [
			[1, 'BARCOPERF', 'Barco perforador'],
			[2, 'MOD', 'Modular'],
			[3, 'A/E', 'Autoelevable'],
			[4, 'S/S', 'Semisumergible'],
			[5, 'FIJO', 'Terrestre'],
			[6, 'LACUSTRE', 'Lacustre'],
			[7, 'ALIG', 'Aligerado'],
			[8, 'SNUB', 'Snubbing'],
			[9, 'FIJO', 'TRP'],
			[10, 'EMP', 'Empaquetado']
		];
		$columnConfig = [false,'ntipo','descripcion'];
		$seeder->table('tipoequipo')->data($array, $columnConfig);

		$seeder->refill();
        return $this->render('index');
    }

}
