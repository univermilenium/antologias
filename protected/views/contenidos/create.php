<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */

$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contenidos', 'url'=>array('index')),
	array('label'=>'Manage Contenidos', 'url'=>array('admin')),
);
?>

<h1>Create Contenidos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>