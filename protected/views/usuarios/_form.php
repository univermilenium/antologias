<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_repeat'); ?>
		<?php echo $form->passwordField($model,'password_repeat',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password_repeat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paterno'); ?>
		<?php echo $form->textField($model,'paterno',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materno'); ?>
		<?php echo $form->textField($model,'materno',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banners'); ?>
		<?php echo $form->checkBox($model,'banners'); ?>
		<?php echo $form->error($model,'banners'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenidos'); ?>
		<?php echo $form->checkBox($model,'contenidos'); ?>
		<?php echo $form->error($model,'contenidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logos'); ?>
		<?php echo $form->checkBox($model,'logos'); ?>
		<?php echo $form->error($model,'logos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas'); ?>
		<?php echo $form->checkBox($model,'notas'); ?>
		<?php echo $form->error($model,'notas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categorias'); ?>
		<?php echo $form->checkBox($model,'categorias'); ?>
		<?php echo $form->error($model,'categorias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productos'); ?>
		<?php echo $form->checkBox($model,'productos'); ?>
		<?php echo $form->error($model,'productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios'); ?>
		<?php echo $form->checkBox($model,'usuarios'); ?>
		<?php echo $form->error($model,'usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->