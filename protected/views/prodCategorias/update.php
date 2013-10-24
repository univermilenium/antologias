<?php
/* @var $this ProdCategoriasController */
/* @var $model ProdCategorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id_cat=>array('view','id'=>$model->id_cat),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Categorias', 'url'=>array('index')),
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'Ver Categoria', 'url'=>array('view', 'id'=>$model->id_cat)),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoria <?php echo $model->id_cat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>