<?php
/* @var $this CatalogController */
/* @var $model Catalog */

$this->breadcrumbs=array(
	'Catalogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Catalog', 'url'=>array('index')),
	array('label'=>'Create Catalog', 'url'=>array('create')),
	array('label'=>'Update Catalog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Catalog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Catalog', 'url'=>array('admin')),
);
?>

<h1>View Catalog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'catalog_name',
		'catalog_name_second',
		'catalog_name_alias',
		'content',
		'seo_title',
		'seo_keywords',
		'seo_description',
		'attach_file',
		'attach_thumb',
		'sort_order',
		'data_count',
		'page_size',
		'status_is',
		'menu_is',
		'redirect_url',
		'display_type',
		'template_list',
		'template_page',
		'template_show',
		'acl_browser',
		'acl_operate',
		'create_time',
		'update_time',
	),
)); ?>
