<?php
/* @var $this ProdCategoriasController */
/* @var $model ProdCategorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id_cat,
);

$this->menu=array(
	array('label'=>'Ver Categorias', 'url'=>array('index')),
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'Actualizar Categorias', 'url'=>array('update', 'id'=>$model->id_cat)),
	array('label'=>'Borrar Categorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cat),'confirm'=>'&iquest;Esats seguro de borrar esta categoria?')),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Ver Categoria #<?php echo $model->id_cat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cat',
		'categoria',
	),
)); ?>
