<?php

class SiteController extends SBaseController
{	
	public $defaultAction='login';
	
	/**
	 * (non-PHPdoc)
	 * @see CController::actions()
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image
			'captcha'=>array(
				'class'=>'CCaptchaAction',

				'maxLength'=>'4',
				'minLength'=>'6',
			),
		);
	}
	
	/**
	 * 
	 */
	public function actionLogin()
	{
		if(!Yii::app()->user->isGuest)
		{
			$this->redirect(array('website/index'));
		}
		
		$form=new LoginForm;
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$form->attributes=$_POST['LoginForm'];
			// validate user input and redirect to previous page if valid
			if($form->validate())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('form'=>$form));
	}
}