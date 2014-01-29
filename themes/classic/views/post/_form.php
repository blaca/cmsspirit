<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_second'); ?>
		<?php echo $form->textField($model,'title_second',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_second'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_alias'); ?>
		<?php echo $form->textField($model,'title_alias',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_style'); ?>
		<?php echo $form->textField($model,'title_style',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_style_serialize'); ?>
		<?php echo $form->textField($model,'title_style_serialize',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_style_serialize'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_path'); ?>
		<?php echo $form->textField($model,'html_path',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'html_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_file'); ?>
		<?php echo $form->textField($model,'html_file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'html_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template'); ?>
		<?php echo $form->textField($model,'template',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'template'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_id'); ?>
		<?php echo $form->textField($model,'catalog_id'); ?>
		<?php echo $form->error($model,'catalog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_id'); ?>
		<?php echo $form->textField($model,'special_id'); ?>
		<?php echo $form->error($model,'special_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_list'); ?>
		<?php echo $form->textArea($model,'image_list',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_list'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textArea($model,'seo_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_keywords'); ?>
		<?php echo $form->textField($model,'seo_keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copy_from'); ?>
		<?php echo $form->textField($model,'copy_from',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'copy_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copy_url'); ?>
		<?php echo $form->textField($model,'copy_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'copy_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redirect_url'); ?>
		<?php echo $form->textField($model,'redirect_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'redirect_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_count'); ?>
		<?php echo $form->textField($model,'view_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commend'); ?>
		<?php echo $form->textField($model,'commend',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'commend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_status'); ?>
		<?php echo $form->textField($model,'attach_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'attach_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_file'); ?>
		<?php echo $form->textField($model,'attach_file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attach_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_thumb'); ?>
		<?php echo $form->textField($model,'attach_thumb',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attach_thumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'favorite_count'); ?>
		<?php echo $form->textField($model,'favorite_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'favorite_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attention_count'); ?>
		<?php echo $form->textField($model,'attention_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'attention_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'top_line'); ?>
		<?php echo $form->textField($model,'top_line',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'top_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update_time'); ?>
		<?php echo $form->textField($model,'last_update_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reply_count'); ?>
		<?php echo $form->textField($model,'reply_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'reply_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reply_allow'); ?>
		<?php echo $form->textField($model,'reply_allow',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'reply_allow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_desc'); ?>
		<?php echo $form->textField($model,'sort_desc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sort_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acl'); ?>
		<?php echo $form->textField($model,'acl',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'acl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_is'); ?>
		<?php echo $form->textField($model,'status_is',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status_is'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->