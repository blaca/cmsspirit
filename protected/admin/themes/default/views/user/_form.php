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
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="simple">
		<?php echo $form->labelEx($model,'realname'); ?>
		<?php echo $form->textField($model,'realname',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'realname'); ?>
	</div>
	
	<?php if ($model->isNewRecord): ?>
		<div class="simple">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('size'=>16,'maxlength'=>256)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->label($model,'pwd_repeat'); ?>
			<?php echo $form->passwordField($model,'pwd_repeat',array('size'=>16,'maxlength'=>256)); ?>
			<?php echo $form->error($model,'pwd_repeat'); ?>
		</div>	
	<?php endif;?>

	<div class="simple">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="simple">
		<?php echo $form->labelEx($model,'profile'); ?>
		<?php echo $form->textArea($model,'profile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'profile'); ?>
	</div>

	<div class="action">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->