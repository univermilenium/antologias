<?php
/* @var $this LogosController */
/* @var $model Logos */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	$model->id_log=>array('view','id'=>$model->id_log),
	'Update',
);

$this->menu=array(
	array('label'=>'List Logos', 'url'=>array('index')),
	array('label'=>'Create Logos', 'url'=>array('create')),
	array('label'=>'View Logos', 'url'=>array('view', 'id'=>$model->id_log)),
	array('label'=>'Manage Logos', 'url'=>array('admin')),
);
?>

<h1>Update Logos <?php echo $model->id_log; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>