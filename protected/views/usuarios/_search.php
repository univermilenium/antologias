<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usr'); ?>
		<?php echo $form->textField($model,'id_usr',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paterno'); ?>
		<?php echo $form->textField($model,'paterno',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materno'); ?>
		<?php echo $form->textField($model,'materno',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banners'); ?>
		<?php echo $form->textField($model,'banners'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contenidos'); ?>
		<?php echo $form->textField($model,'contenidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logos'); ?>
		<?php echo $form->textField($model,'logos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notas'); ?>
		<?php echo $form->textField($model,'notas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categorias'); ?>
		<?php echo $form->textField($model,'categorias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos'); ?>
		<?php echo $form->textField($model,'productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios'); ?>
		<?php echo $form->textField($model,'usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->