<div class="yiiForm">

<p>
The item with<span class="required">*</span> are must
</p>
<br/>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'catalog_id'); ?>
<?php echo CHtml::activeDropDownList($model,'catalog_id'); ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'title'); ?>
<?php echo CHtml::activeTextField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
</div>
    
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'Content'); ?>
<?php echo CHtml::activeTextField($model,'content', array('class'=>'validate[required]')); ?>
<?php $this->widget('application.vendor.kindeditor.KindEditor',array(
	  'target'=>array(
	  	'#Post_content'=>array('uploadJson'=>$this->createUrl('upload'),'extraFileUploadParams'=>array(array('sessionId'=>session_id()))))));?>
</div>

<div class="action">
<?php echo CHtml::submitButton('submit'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->
