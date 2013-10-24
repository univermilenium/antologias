<?php
/* @var $this ContenidosController */
/* @var $data Contenidos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cont')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cont), array('view', 'id'=>$data->id_cont)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec1')); ?>:</b>
	<?php echo CHtml::encode($data->sec1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec2')); ?>:</b>
	<?php echo CHtml::encode($data->sec2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec3')); ?>:</b>
	<?php echo CHtml::encode($data->sec3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec4')); ?>:</b>
	<?php echo CHtml::encode($data->sec4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec5')); ?>:</b>
	<?php echo CHtml::encode($data->sec5); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('creado')); ?>:</b>
	<?php echo CHtml::encode($data->creado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creado_por')); ?>:</b>
	<?php echo CHtml::encode($data->creado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado')); ?>:</b>
	<?php echo CHtml::encode($data->modificado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado_por')); ?>:</b>
	<?php echo CHtml::encode($data->modificado_por); ?>
	<br />

	*/ ?>

</div>