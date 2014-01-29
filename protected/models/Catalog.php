<?php

/**
 * This is the model class for table "sp_catalog".
 *
 * The followings are the available columns in table 'sp_catalog':
 * @property string $id
 * @property string $parent_id
 * @property string $catalog_name
 * @property string $catalog_name_second
 * @property string $catalog_name_alias
 * @property string $content
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $attach_file
 * @property string $attach_thumb
 * @property string $sort_order
 * @property string $data_count
 * @property integer $page_size
 * @property string $status_is
 * @property string $menu_is
 * @property string $redirect_url
 * @property string $display_type
 * @property string $template_list
 * @property string $template_page
 * @property string $template_show
 * @property string $acl_browser
 * @property string $acl_operate
 * @property string $create_time
 * @property string $update_time
 */
class Catalog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sp_catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_name', 'required'),
			array('page_size', 'numerical', 'integerOnly'=>true),
			array('parent_id, sort_order, data_count', 'length', 'max'=>10),
			array('catalog_name, catalog_name_second, catalog_name_alias, seo_title, attach_file, attach_thumb, template_list, template_page, template_show', 'length', 'max'=>100),
			array('seo_keywords, redirect_url, acl_browser, acl_operate', 'length', 'max'=>255),
			array('status_is, menu_is', 'length', 'max'=>1),
			array('display_type', 'length', 'max'=>4),
			array('content, seo_description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, parent_id, catalog_name, catalog_name_second, catalog_name_alias, content, seo_title, seo_keywords, seo_description, attach_file, attach_thumb, sort_order, data_count, page_size, status_is, menu_is, redirect_url, display_type, template_list, template_page, template_show, acl_browser, acl_operate, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'catalog_name' => 'Catalog Name',
			'catalog_name_second' => 'Catalog Name Second',
			'catalog_name_alias' => 'Catalog Name Alias',
			'content' => 'Content',
			'seo_title' => 'Seo Title',
			'seo_keywords' => 'Seo Keywords',
			'seo_description' => 'Seo Description',
			'attach_file' => 'Attach File',
			'attach_thumb' => 'Attach Thumb',
			'sort_order' => 'Sort Order',
			'data_count' => 'Data Count',
			'page_size' => 'Page Size',
			'status_is' => 'Status Is',
			'menu_is' => 'Menu Is',
			'redirect_url' => 'Redirect Url',
			'display_type' => 'Display Type',
			'template_list' => 'Template List',
			'template_page' => 'Template Page',
			'template_show' => 'Template Show',
			'acl_browser' => 'Acl Browser',
			'acl_operate' => 'Acl Operate',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('parent_id',$this->parent_id,true);
		$criteria->compare('catalog_name',$this->catalog_name,true);
		$criteria->compare('catalog_name_second',$this->catalog_name_second,true);
		$criteria->compare('catalog_name_alias',$this->catalog_name_alias,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('attach_file',$this->attach_file,true);
		$criteria->compare('attach_thumb',$this->attach_thumb,true);
		$criteria->compare('sort_order',$this->sort_order,true);
		$criteria->compare('data_count',$this->data_count,true);
		$criteria->compare('page_size',$this->page_size);
		$criteria->compare('status_is',$this->status_is,true);
		$criteria->compare('menu_is',$this->menu_is,true);
		$criteria->compare('redirect_url',$this->redirect_url,true);
		$criteria->compare('display_type',$this->display_type,true);
		$criteria->compare('template_list',$this->template_list,true);
		$criteria->compare('template_page',$this->template_page,true);
		$criteria->compare('template_show',$this->template_show,true);
		$criteria->compare('acl_browser',$this->acl_browser,true);
		$criteria->compare('acl_operate',$this->acl_operate,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Catalog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * 
	 * @param unknown $parentid
	 * @param unknown $array
	 * @param number $level
	 * @param number $add
	 * @return Ambigous <multitype:, multitype:multitype:number unknown  >
	 */
	public function get($parentid, $array = array(), $level = 0, $add = 2) 
	{
		$newarray = array();
		$temparray = array();
		
		foreach ((array) $array as $v) {
			if ($v ["parent_id"] == $parentid) {
				$newarray[] = array(
						'id' => $v ['id'],
						'catalog_name' => $v ['catalog_name'],
						'catalog_name_alias' => $v ['catalog_name_alias'],
						'parent_id' => $v ['parent_id'],
						'level' => $level,
						'sort_order' => $v ['sort_order'],
						'seo_keywords' => $v ['seo_keywords'],
						'seo_description' => $v ['seo_description'],
						'attach_file' => $v ['attach_file'],
						'attach_thumb' => $v ['attach_thumb'],
						'status_is' => $v ['status_is'],
						'data_count' => $v ['data_count'] ,
						'display_type' => $v ['display_type'],
						'menu_is' => $v ['menu_is'],
						'template_list' => $v ['template_list'],
						'acl_browser' => $v ['acl_browser'],
						'acl_operate' => $v ['acl_operate'],
						'template_page' => $v ['template_page'],
						'template_show' => $v ['template_show'],
						'page_size'=>$v['page_size'],
						'create_time' => $v ['create_time'],
						'update_time' => $v ['update_time']
				);
				
				$temparray = self::get ( $v ['id'], $array, ($level + $add) );
				if ($temparray) {
					$newarray = array_merge ( $newarray, $temparray );
				}
			}
		}
		
		return $newarray;
	}
}
