<?php $this->pageTitle=Yii::app()->name . ' - Login'; ?>

<div class="yiiForm c_form">
	<?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>
</div><!-- yiiForm -->