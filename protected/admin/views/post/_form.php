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
<?php echo CHtml::activeLabelEx($model,'copy_from'); ?>
<?php echo CHtml::activeTextField($model,'copy_from',array('size'=>60,'maxlength'=>255)); ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'copy_url'); ?>
<?php echo CHtml::activeTextField($model,'copy_url',array('size'=>60,'maxlength'=>255)); ?>
</div>
    
<div class="simple">
<?php $this->widget('ext.kindeditor.KindEditor', array(
			'model'=>$model,
	        'attribute'=>'content',
	        )
        ); ?>
<?php echo CHtml::activeLabelEx($model, 'content'); ?>
<?php echo CHtml::activeTextArea($model,'content',array('rows'=>30, 'cols'=>100)); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton('submit'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->
