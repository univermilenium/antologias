<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */

$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	$model->id_cont=>array('view','id'=>$model->id_cont),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contenidos', 'url'=>array('index')),
	array('label'=>'Create Contenidos', 'url'=>array('create')),
	array('label'=>'View Contenidos', 'url'=>array('view', 'id'=>$model->id_cont)),
	array('label'=>'Manage Contenidos', 'url'=>array('admin')),
);
?>

<h1>Update Contenidos <?php echo $model->id_cont; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>