<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userid), array('view', 'id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realname')); ?>:</b>
	<?php echo CHtml::encode($data->realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile')); ?>:</b>
	<?php echo CHtml::encode($data->profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regIp')); ?>:</b>
	<?php echo CHtml::encode($data->regIp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('regTime')); ?>:</b>
	<?php echo CHtml::encode($data->regTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginIp')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginIp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginTime')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginTime); ?>
	<br />

	*/ ?>

</div>