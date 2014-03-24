<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="simple">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>
	
	<div class="simple">
		<?php echo $form->labelEx($model,'catalog_name'); ?>
		<?php echo $form->textField($model,'catalog_name',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'catalog_name'); ?>
	</div>
	
	<div class="simple">
		<?php echo $form->labelEx($model,'catalog_name_alias'); ?>
		<?php echo $form->textField($model,'catalog_name_alias',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'catalog_name_alias'); ?>
	</div>
	
	<div class="simple">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	
	<div class="action">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->