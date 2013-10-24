<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->id_not=>array('view','id'=>$model->id_not),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Notas', 'url'=>array('index')),
	array('label'=>'Crear Nota', 'url'=>array('create')),
	array('label'=>'Ver Nota', 'url'=>array('view', 'id'=>$model->id_not)),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Update Notas <?php echo $model->id_not; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>