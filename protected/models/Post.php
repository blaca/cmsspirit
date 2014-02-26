<?php

/**
 * This is the model class for table "sp_post".
 *
 * The followings are the available columns in table 'sp_post':
 * @property string $id
 * @property string $user_id
 * @property string $author
 * @property string $title
 * @property string $title_second
 * @property string $title_style
 * @property string $html_path
 * @property string $html_file
 * @property string $template
 * @property integer $catalog_id
 * @property integer $special_id
 * @property string $intro
 * @property string $image_list
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $content
 * @property string $copy_from
 * @property string $copy_url
 * @property string $redirect_url
 * @property string $tags
 * @property string $view_count
 * @property string $commend
 * @property string $attach_status
 * @property string $attach_file
 * @property string $attach_thumb
 * @property string $favorite_count
 * @property string $attention_count
 * @property string $top_line
 * @property string $reply_count
 * @property string $reply_allow
 * @property string $sort_desc
 * @property string $acl
 * @property string $status_is
 * @property string $create_time
 * @property string $update_time
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sp_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('catalog_id, special_id', 'numerical', 'integerOnly'=>true),
			array('user_id, view_count, favorite_count, attention_count, reply_count, sort_desc', 'length', 'max'=>10),
			array('author, html_path, html_file, copy_from, acl', 'length', 'max'=>100),
			array('title, title_second, title_style, seo_title, seo_keywords, copy_url, redirect_url, tags, attach_file, attach_thumb', 'length', 'max'=>255),
			array('template', 'length', 'max'=>60),
			array('commend, attach_status, top_line, reply_allow, status_is', 'length', 'max'=>1),
			array('intro, image_list, seo_description, content, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, author, title, title_second, title_style, html_path, html_file, template, catalog_id, special_id, intro, image_list, seo_title, seo_description, seo_keywords, content, copy_from, copy_url, redirect_url, tags, view_count, commend, attach_status, attach_file, attach_thumb, favorite_count, attention_count, top_line, reply_count, reply_allow, sort_desc, acl, status_is, create_time, update_time', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'author' => 'Author',
			'title' => 'Title',
			'title_second' => 'Title Second',
			'title_style' => 'Title Style',
			'html_path' => 'Html Path',
			'html_file' => 'Html File',
			'template' => 'Template',
			'catalog_id' => 'Catalog',
			'special_id' => 'Special',
			'intro' => 'Intro',
			'image_list' => 'Image List',
			'seo_title' => 'Seo Title',
			'seo_description' => 'Seo Description',
			'seo_keywords' => 'Seo Keywords',
			'content' => 'Content',
			'copy_from' => 'Copy From',
			'copy_url' => 'Copy Url',
			'redirect_url' => 'Redirect Url',
			'tags' => 'Tags',
			'view_count' => 'View Count',
			'commend' => 'Commend',
			'attach_status' => 'Attach Status',
			'attach_file' => 'Attach File',
			'attach_thumb' => 'Attach Thumb',
			'favorite_count' => 'Favorite Count',
			'attention_count' => 'Attention Count',
			'top_line' => 'Top Line',
			'reply_count' => 'Reply Count',
			'reply_allow' => 'Reply Allow',
			'sort_desc' => 'Sort Desc',
			'acl' => 'Acl',
			'status_is' => 'Status Is',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_second',$this->title_second,true);
		$criteria->compare('title_style',$this->title_style,true);
		$criteria->compare('html_path',$this->html_path,true);
		$criteria->compare('html_file',$this->html_file,true);
		$criteria->compare('template',$this->template,true);
		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('special_id',$this->special_id);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('image_list',$this->image_list,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('copy_from',$this->copy_from,true);
		$criteria->compare('copy_url',$this->copy_url,true);
		$criteria->compare('redirect_url',$this->redirect_url,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('view_count',$this->view_count,true);
		$criteria->compare('commend',$this->commend,true);
		$criteria->compare('attach_status',$this->attach_status,true);
		$criteria->compare('attach_file',$this->attach_file,true);
		$criteria->compare('attach_thumb',$this->attach_thumb,true);
		$criteria->compare('favorite_count',$this->favorite_count,true);
		$criteria->compare('attention_count',$this->attention_count,true);
		$criteria->compare('top_line',$this->top_line,true);
		$criteria->compare('reply_count',$this->reply_count,true);
		$criteria->compare('reply_allow',$this->reply_allow,true);
		$criteria->compare('sort_desc',$this->sort_desc,true);
		$criteria->compare('acl',$this->acl,true);
		$criteria->compare('status_is',$this->status_is,true);
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
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
