<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Notas', 'url'=>array('index')),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Crear Nota</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>