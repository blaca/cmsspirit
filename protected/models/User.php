<?php

/**
 * This is the model class for table "sp_user".
 *
 * The followings are the available columns in table 'sp_user':
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $email
 * @property string $profile
 * @property string $regIp
 * @property string $regTime
 * @property string $lastLoginIp
 * @property string $lastLoginTime
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sp_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, regIp, regTime', 'required'),
			array('username, regIp, lastLoginIp', 'length', 'max'=>15),
			array('password, email', 'length', 'max'=>32),
			array('realname', 'length', 'max'=>16),
			array('profile, lastLoginTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userid, username, password, realname, email, profile, regIp, regTime, lastLoginIp, lastLoginTime', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'username' => 'Username',
			'password' => 'Password',
			'realname' => 'Realname',
			'email' => 'Email',
			'profile' => 'Profile',
			'regIp' => 'Reg Ip',
			'regTime' => 'Reg Time',
			'lastLoginIp' => 'Last Login Ip',
			'lastLoginTime' => 'Last Login Time',
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

		$criteria->compare('userid',$this->userid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('regIp',$this->regIp,true);
		$criteria->compare('regTime',$this->regTime,true);
		$criteria->compare('lastLoginIp',$this->lastLoginIp,true);
		$criteria->compare('lastLoginTime',$this->lastLoginTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
