<?php
/* @var $this LogosController */
/* @var $model Logos */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Logos', 'url'=>array('index')),
	array('label'=>'Manage Logos', 'url'=>array('admin')),
);
?>

<h1>Create Logos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>