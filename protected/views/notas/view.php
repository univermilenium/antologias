<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->id_not,
);

$this->menu=array(
	array('label'=>'Ver Notas', 'url'=>array('index')),
	array('label'=>'Crear Nota', 'url'=>array('create')),
	array('label'=>'Update Notas', 'url'=>array('update', 'id'=>$model->id_not)),
	array('label'=>'Delete Notas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_not),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Ver Nota #<?php echo $model->id_not; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_not',
		'publicar',
		'titulo',
		'nota',
		'autor',
		'fecha',
		'creado',
		'creado_por',
		'modificado',
		'modificado_por',
	),
)); ?>
