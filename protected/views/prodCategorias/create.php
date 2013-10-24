<?php
/* @var $this ProdCategoriasController */
/* @var $model ProdCategorias */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Categorias', 'url'=>array('index')),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Crear ProdCategorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>