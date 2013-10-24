<?php
/* @var $this LogosController */
/* @var $model Logos */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	$model->id_log,
);

$this->menu=array(
	array('label'=>'List Logos', 'url'=>array('index')),
	array('label'=>'Create Logos', 'url'=>array('create')),
	array('label'=>'Update Logos', 'url'=>array('update', 'id'=>$model->id_log)),
	array('label'=>'Delete Logos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_log),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Logos', 'url'=>array('admin')),
);
?>

<h1>View Logos #<?php echo $model->id_log; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_log',
		'publicar',
		'orden',
		'link',
		'img',
		'creado',
		'creado_por',
		'modificado',
		'modificado_por',
	),
)); ?>
