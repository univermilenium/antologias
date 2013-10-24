<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Productos', 'url'=>array('index')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Crear Productos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>