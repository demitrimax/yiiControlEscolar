<?php

// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\tipoequipo;
use app\models\catcias;

class SeedController extends Controller
{
    public function actionIndex()
    {

		$seeder = new \tebazil\yii2seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();


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

			//print_r($array);			
			foreach ($array as $equipo)
			{
				//print('hola ');
				//print($equipo['ntipo']);
				//$tequipo->setIsNewRecord(true);
				$tequipo = new tipoequipo();
				$tequipo->ntipo = $equipo['ntipo'];
				$tequipo->descripcion = $equipo['descripcion'];
				$tequipo->save();
			}

			$array = [
				[ 'nombre' => 'INDUSTRIAL PERFORADORA DE CAMPECHE, S. A. DE C.V.','nombrecorto' => 'IPC'],
				[ 'nombre' => 'PEMEX PERFORACION Y SERVICIOS','nombrecorto' => 'PPS'],
				[ 'nombre' => 'COSL MEXICO, S. A. DE C. V.','nombrecorto' => 'COSL'],
				[ 'nombre' => 'GOIMAR, S.A. DE C.V.','nombrecorto' => 'GOIMAR'],
				[ 'nombre' => 'MEXDRILL OFFSHORE, S. DE R.L. DE C.V.','nombrecorto' => 'MEXDRILL'],
				[ 'nombre' => 'NOBLE CONTRACTING SARL','nombrecorto' => 'NOBLE'],
				[ 'nombre' => 'PERFORADORA CENTRAL, S.A. DE C.V.','nombrecorto' => 'PC'],
				[ 'nombre' => 'KCA DEUTAG CASPIAN LIMITED','nombrecorto' => 'KCA'],
				[ 'nombre' => 'NABORS PERFORACIONES DE MEXICO, S. DE R.L. DE C.V.','nombrecorto' => 'NABORS'],
				[ 'nombre' => 'GRUPO R EXPLORACION MARINA, S.A. DE C.V.','nombrecorto' => 'GREM'],
				[ 'nombre' => 'BLAKE INTERNATIONAL USA RIG, LLC.','nombrecorto' => 'BLAKE'],
				[ 'nombre' => 'BLUE MARINE DRILLING, S.A. DE C.V. / DEEP DRILLER MEXICO, S. DE R.L. DE C.V. / ABAN & PTE LTD','nombrecorto' => 'BMD'],
				[ 'nombre' => 'PROCESO LICITATORIO','nombrecorto' => 'LICITACION'],
				[ 'nombre' => 'COMPAÃ‘IA PERFORADORA MEXICO S.A.P.I. DE C.V.','nombrecorto' => 'CPM'],
				[ 'nombre' => 'COSL MEXICO, S.A. DE C.V. / GOIMAR, S.A. DE C.V.','nombrecorto' => 'COLS/GOIMA'],
				[ 'nombre' => 'ENSCO DRILLING MEXICO, LLC','nombrecorto' => 'ENSCO'],
				[ 'nombre' => 'INDUSTRIAL DE SERVICIOS & OUTSOURCING, S.A. DE C.V. / FIRSTDRILL LIMITED','nombrecorto' => 'ISO'],
				[ 'nombre' => 'KEY ENERGY SERVICES DE MEXICO S. DE A.L.','nombrecorto' => 'KEY'],
				[ 'nombre' => 'PITSA','nombrecorto' => 'PITSA'],
				[ 'nombre' => 'SEA DRAGON DE MEXICO S. DE R.L. DE C.V.','nombrecorto' => 'SEA'],
				[ 'nombre' => 'TECNOLOGIAS RELACIONADAS CON ENERGIA Y SERVICIOS ESPECIALIZADOS, S.A. DE C.V.','nombrecorto' => 'TRESE'],
				[ 'nombre' => 'TODCO MEXICO, INC.','nombrecorto' => 'TODCO'],
				[ 'nombre' => 'GRUPO CARSO, S.A.B DE C.V','nombrecorto' => 'CARSO'],
				[ 'nombre' => 'ORO NEGRO','nombrecorto' => 'ON'],
				[ 'nombre' => 'CONSTRUCTORA Y PERFORADORA  LATINA','nombrecorto' => 'LATINA'],
				[ 'nombre' => 'SEADRILL','nombrecorto' => 'SEADRILL'],
				[ 'nombre' => 'INDUSTRIAS COSTA MESA S. A. DE C.V./ AQUILA DRILLING CO., LP','nombrecorto' => 'ICMA'],
				[ 'nombre' => 'DEEP DRILLER MEXICO, S. DE R. L. DE C.V.','nombrecorto' => 'DEEPDRM'],
				[ 'nombre' => 'OPERADORA CICSA, S.A. DE C.V.','nombrecorto' => 'CICSA'],
				[ 'nombre' => 'CAMPECHE JACKUP, S.A. DE C.V.','nombrecorto' => 'CAMPJKUP'],
				[ 'nombre' => 'TABASCO JACKUP, S.A. DE C.V.','nombrecorto' => 'TABJKUP'],
				[ 'nombre' => 'SERVICIOS ESPECIALIZADOS LA ISLA S.A. DE C.V.','nombrecorto' => 'LA ISLA'],
				[ 'nombre' => 'PERFORADORA MEXICO, S.A.P.I. DE C.V.','nombrecorto' => 'PERFMX'],
				[ 'nombre' => 'DRILLMEX S.P.A./DRILLMEC INC./PPS','nombrecorto' => 'DRILLMEC'],
				[ 'nombre' => 'GSP OFFSHORE MEXICO','nombrecorto' => 'GSP'],
				[ 'nombre' => 'LOAD MASTER / PPS','nombrecorto' => 'LM/PPS'],
				[ 'nombre' => 'MERCO INGENIERIA','nombrecorto' => 'MERCO'],
				[ 'nombre' => 'PARAGON OFFSHORE CONTRACTING, S.A.R.L.','nombrecorto' => 'PARAGON'],
				[ 'nombre' => 'HALLIBURTON','nombrecorto' => 'HALL'],
				[ 'nombre' => 'COSAFI DEL NORESTE','nombrecorto' => 'COSAFI'],
	
			];

			foreach ($array as $cia ) {
				$company = new catcias();
				$company->nombre = $cia['nombre'];
				$company->nomcorto = $cia['nombrecorto'];
				$company->save();
			}

			
    }
}
/*
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

		 $seeder->table('article')->columns([
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
		])->rowQuantity(30); 
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
*/