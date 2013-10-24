<?php
/* @var $this BannersController */
/* @var $model Banners */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->id_ban,
);

$this->menu=array(
	array('label'=>'List Banners', 'url'=>array('index')),
	array('label'=>'Create Banners', 'url'=>array('create')),
	array('label'=>'Update Banners', 'url'=>array('update', 'id'=>$model->id_ban)),
	array('label'=>'Delete Banners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ban),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banners', 'url'=>array('admin')),
);
?>

<h1>View Banners #<?php echo $model->id_ban; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ban',
		'orden',
		'publicar',
		'titulo',
		'link',
		'target',
		'img',
		'creado',
		'creado_por',
		'modificado',
		'modificado_por',
	),
)); ?>
