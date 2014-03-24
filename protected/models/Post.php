<?php

/**
 * This is the model class for table "sp_post".
 *
 * The followings are the available columns in table 'sp_post':
 * @property string $id
 * @property string $user_id
 * @property string $author
 * @property string $title
 * @property integer $catalog_id
 * @property string $intro
 * @property string $content
 * @property string $copy_from
 * @property string $copy_url
 * @property string $tags
 * @property string $view_count
 * @property string $commend
 * @property string $reply_count
 * @property string $reply_allow
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
			array('catalog_id', 'numerical', 'integerOnly'=>true),
			array('user_id, view_count, reply_count', 'length', 'max'=>10),
			array('author, copy_from', 'length', 'max'=>100),
			array('title, copy_url, tags', 'length', 'max'=>255),
			array('commend, reply_allow', 'length', 'max'=>1),
			array('intro, content, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, author, title, catalog_id, intro, content, copy_from, copy_url, tags, view_count, commend, reply_count, reply_allow, create_time, update_time', 'safe', 'on'=>'search'),
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
			'catalog_id' => 'Catalog',
			'intro' => 'Intro',
			'content' => 'Content',
			'copy_from' => 'Copy From',
			'copy_url' => 'Copy Url',
			'tags' => 'Tags',
			'view_count' => 'View Count',
			'commend' => 'Commend',
			'reply_count' => 'Reply Count',
			'reply_allow' => 'Reply Allow',
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
		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('copy_from',$this->copy_from,true);
		$criteria->compare('copy_url',$this->copy_url,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('view_count',$this->view_count,true);
		$criteria->compare('commend',$this->commend,true);
		$criteria->compare('reply_count',$this->reply_count,true);
		$criteria->compare('reply_allow',$this->reply_allow,true);
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
