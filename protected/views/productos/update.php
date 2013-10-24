<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id_pro=>array('view','id'=>$model->id_pro),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'View Productos', 'url'=>array('view', 'id'=>$model->id_pro)),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Producto <?php echo $model->id_pro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>