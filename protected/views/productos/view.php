<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id_pro,
);

$this->menu=array(
	array('label'=>'Ver Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->id_pro)),
	array('label'=>'Borrar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>View Productos #<?php echo $model->id_pro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pro',
		'categoria',
		'nombre',
		'descripcion',
		'img',
		'precio',
		'existencia',
		'creado',
		'creado_por',
		'modificado',
		'modificado_por',
	),
)); ?>
