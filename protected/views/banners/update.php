<?php
/* @var $this BannersController */
/* @var $model Banners */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->id_ban=>array('view','id'=>$model->id_ban),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banners', 'url'=>array('index')),
	array('label'=>'Create Banners', 'url'=>array('create')),
	array('label'=>'View Banners', 'url'=>array('view', 'id'=>$model->id_ban)),
	array('label'=>'Manage Banners', 'url'=>array('admin')),
);
?>

<h1>Update Banners <?php echo $model->id_ban; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>