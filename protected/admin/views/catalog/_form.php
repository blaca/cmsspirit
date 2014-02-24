<?php
/* @var $this CatalogController */
/* @var $model Catalog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catalog-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_name'); ?>
		<?php echo $form->textField($model,'catalog_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'catalog_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_name_second'); ?>
		<?php echo $form->textField($model,'catalog_name_second',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'catalog_name_second'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_name_alias'); ?>
		<?php echo $form->textField($model,'catalog_name_alias',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'catalog_name_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_keywords'); ?>
		<?php echo $form->textField($model,'seo_keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textArea($model,'seo_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_file'); ?>
		<?php echo $form->textField($model,'attach_file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'attach_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_thumb'); ?>
		<?php echo $form->textField($model,'attach_thumb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'attach_thumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_count'); ?>
		<?php echo $form->textField($model,'data_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'data_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_size'); ?>
		<?php echo $form->textField($model,'page_size'); ?>
		<?php echo $form->error($model,'page_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_is'); ?>
		<?php echo $form->textField($model,'status_is',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status_is'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_is'); ?>
		<?php echo $form->textField($model,'menu_is',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'menu_is'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redirect_url'); ?>
		<?php echo $form->textField($model,'redirect_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'redirect_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_type'); ?>
		<?php echo $form->textField($model,'display_type',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'display_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_list'); ?>
		<?php echo $form->textField($model,'template_list',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'template_list'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_page'); ?>
		<?php echo $form->textField($model,'template_page',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'template_page'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_show'); ?>
		<?php echo $form->textField($model,'template_show',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'template_show'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acl_browser'); ?>
		<?php echo $form->textField($model,'acl_browser',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'acl_browser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acl_operate'); ?>
		<?php echo $form->textField($model,'acl_operate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'acl_operate'); ?>
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