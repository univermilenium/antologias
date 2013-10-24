<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
		if(Yii::app()->user->isGuest){
			$this->widget('zii.widgets.CMenu', array(
				'activeCssClass' => 'active',
				'activateParents' => true,
				'items' => array (
					array('label'=>'Inicio', 'url'=>array('/site/index')),
				),
			));
		}else{
			$this->widget('zii.widgets.CMenu',array(
				'activeCssClass' => 'active',
				'activateParents' => true,
				'items'=> array(
					array('label'=>'Banners', 'url'=>array('banners/index')),
					array('label'=>'Contenidos', 'url'=>array('contenidos/index')),
					array('label'=>'Logos', 'url'=>array('logos/index')),
					array('label'=>'Notas', 'url'=>array('notas/index')),
					array('label'=>'Categorías', 'url'=>array('prodCategorias/index')),
					array('label'=>'Productos', 'url'=>array('productos/index')),
					array('label'=>'Usuarios', 'url'=>array('usuarios/index')),
					array('label'=>'Salir ('.Yii::app()->user->name.')','url'=>array('/site/logout')),
				),
			));
		}
		
/*		
		$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Banners', 'url'=>array('banners/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Contenidos', 'url'=>array('contenidos/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logos', 'url'=>array('logos/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Notas', 'url'=>array('notas/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Categorías', 'url'=>array('prodCategorias/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Productos', 'url'=>array('productos/index'), 'visible'=>!Yii::app()->user->isGuest),				
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
 elementos del menu deshabilitado por cuestiones de formato
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Iniciar sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
*/		
		 ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by noble &reg;<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
