<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */

$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	$model->id_cont,
);

$this->menu=array(
	array('label'=>'List Contenidos', 'url'=>array('index')),
	array('label'=>'Create Contenidos', 'url'=>array('create')),
	array('label'=>'Update Contenidos', 'url'=>array('update', 'id'=>$model->id_cont)),
	array('label'=>'Delete Contenidos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cont),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contenidos', 'url'=>array('admin')),
);
?>

<h1>View Contenidos #<?php echo $model->id_cont; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cont',
		'titulo',
		'sec1',
		'sec2',
		'sec3',
		'sec4',
		'sec5',
		'creado',
		'creado_por',
		'modificado',
		'modificado_por',
	),
)); ?>
