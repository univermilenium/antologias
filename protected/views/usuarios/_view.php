<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usr')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usr), array('view', 'id'=>$data->id_usr)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterno')); ?>:</b>
	<?php echo CHtml::encode($data->paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materno')); ?>:</b>
	<?php echo CHtml::encode($data->materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banners')); ?>:</b>
	<?php echo CHtml::encode($data->banners); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contenidos')); ?>:</b>
	<?php echo CHtml::encode($data->contenidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logos')); ?>:</b>
	<?php echo CHtml::encode($data->logos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas')); ?>:</b>
	<?php echo CHtml::encode($data->notas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorias')); ?>:</b>
	<?php echo CHtml::encode($data->categorias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos')); ?>:</b>
	<?php echo CHtml::encode($data->productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios); ?>
	<br />

	*/ ?>

</div>