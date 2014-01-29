<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
	<?php echo CHtml::encode($data->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_second')); ?>:</b>
	<?php echo CHtml::encode($data->title_second); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_alias')); ?>:</b>
	<?php echo CHtml::encode($data->title_alias); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('title_style')); ?>:</b>
	<?php echo CHtml::encode($data->title_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_style_serialize')); ?>:</b>
	<?php echo CHtml::encode($data->title_style_serialize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_path')); ?>:</b>
	<?php echo CHtml::encode($data->html_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_file')); ?>:</b>
	<?php echo CHtml::encode($data->html_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template')); ?>:</b>
	<?php echo CHtml::encode($data->template); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_id')); ?>:</b>
	<?php echo CHtml::encode($data->catalog_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_id')); ?>:</b>
	<?php echo CHtml::encode($data->special_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intro')); ?>:</b>
	<?php echo CHtml::encode($data->intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_list')); ?>:</b>
	<?php echo CHtml::encode($data->image_list); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_title')); ?>:</b>
	<?php echo CHtml::encode($data->seo_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_description')); ?>:</b>
	<?php echo CHtml::encode($data->seo_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->seo_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copy_from')); ?>:</b>
	<?php echo CHtml::encode($data->copy_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copy_url')); ?>:</b>
	<?php echo CHtml::encode($data->copy_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redirect_url')); ?>:</b>
	<?php echo CHtml::encode($data->redirect_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_count')); ?>:</b>
	<?php echo CHtml::encode($data->view_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commend')); ?>:</b>
	<?php echo CHtml::encode($data->commend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_status')); ?>:</b>
	<?php echo CHtml::encode($data->attach_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_file')); ?>:</b>
	<?php echo CHtml::encode($data->attach_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->attach_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favorite_count')); ?>:</b>
	<?php echo CHtml::encode($data->favorite_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attention_count')); ?>:</b>
	<?php echo CHtml::encode($data->attention_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('top_line')); ?>:</b>
	<?php echo CHtml::encode($data->top_line); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reply_count')); ?>:</b>
	<?php echo CHtml::encode($data->reply_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reply_allow')); ?>:</b>
	<?php echo CHtml::encode($data->reply_allow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort_desc')); ?>:</b>
	<?php echo CHtml::encode($data->sort_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acl')); ?>:</b>
	<?php echo CHtml::encode($data->acl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_is')); ?>:</b>
	<?php echo CHtml::encode($data->status_is); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>