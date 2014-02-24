<div class="yiiForm">

<p>
The field with<span class="required">*</span> are required
</p>
<br/>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
	<?php echo CHtml::activeLabelEx($model,'catalog_id'); ?>
	<?php echo CHtml::activeDropDownList($model, 'catalog_id', 
										 $this->catalog_list,
										 array('empty' => '(Select a category)')); ?>
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
	<?php echo CHtml::activeLabelEx($model,'author'); ?>
	<?php echo CHtml::activeTextField($model,'author',array('size'=>60,'maxlength'=>255)); ?>
</div> 

<div class="simple">
	<?php echo CHtml::activeLabelEx($model,'intro'); ?>
	<?php echo CHtml::activeTextArea($model,'intro',array('rows'=>5, 'cols'=>46)); ?>
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

<br/>
<div class="simple">
	<?php echo CHtml::activeLabelEx($model,'tags'); ?>
	<?php echo CHtml::activeTextField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo "split multi tags with (,)"?>
</div> 

<div class="action">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->
