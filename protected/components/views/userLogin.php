<div class="caption">
	<h2>User Login</h2>
	<p>Please login if you are already user of this site。</p>
</div>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($form); ?>

<?php if(extension_loaded('gd')): ?>
<div class="simple">
	<?php echo CHtml::activeLabel($form,'verifyCode'); ?>
	<div class="pt">
		<?php $this->widget('CCaptcha'); ?><br/>
		<?php echo CHtml::activeTextField($form,'verifyCode',array('class'=>'t_input')); ?>
	</div>
	<p class="hint">Please Fill the character above.</p>
</div>
<?php endif; ?>

<div class="simple">
<?php echo CHtml::activeLabel($form,'username'); ?>
<?php echo CHtml::activeTextField($form,'username',array('class'=>'t_input',)) ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($form,'password'); ?>
<?php echo CHtml::activePasswordField($form,'password',array('class'=>'t_input',)) ?>
<p class="hint">
</p>
</div>

<div class="action">
<?php echo CHtml::activeCheckBox($form,'rememberMe'); ?>
<?php echo CHtml::activeLabel($form,'rememberMe'); ?>
<br/>
<?php echo CHtml::submitButton('Login',array('class'=>'submit')); ?>
<?php echo CHtml::link('forget password',array('site/forget')); ?>
</div>

<?php echo CHtml::endForm(); ?>