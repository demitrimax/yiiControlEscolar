<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alumnos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'matricula',
            'nombre',
            'apellido_pat',
            'apellido_mat',
            'CURP',
            //'genero',
            //'telefonofijo',
            //'telefonocel',
            //'email:email',
            //'fechainscripcion',
            //'status',
            //'NSS',
            //'tutor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
