<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contenidos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec1'); ?>
		<?php echo $form->textArea($model,'sec1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sec1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec2'); ?>
		<?php echo $form->textArea($model,'sec2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sec2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec3'); ?>
		<?php echo $form->textArea($model,'sec3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sec3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec4'); ?>
		<?php echo $form->textArea($model,'sec4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sec4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec5'); ?>
		<?php echo $form->textArea($model,'sec5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sec5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creado'); ?>
		<?php echo $form->textField($model,'creado'); ?>
		<?php echo $form->error($model,'creado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creado_por'); ?>
		<?php echo $form->textField($model,'creado_por'); ?>
		<?php echo $form->error($model,'creado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificado'); ?>
		<?php echo $form->textField($model,'modificado'); ?>
		<?php echo $form->error($model,'modificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificado_por'); ?>
		<?php echo $form->textField($model,'modificado_por'); ?>
		<?php echo $form->error($model,'modificado_por'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->