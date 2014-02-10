<?php

class SiteController extends SBaseController
{	
	/**
	 * 
	 * @var unknown
	 */
	public $defaultAction='login';
	
	
	public function actionLogin()
	{
		if(!Yii::app()->user->isGuest)
		{
			$this->redirect(array('website/index'));
		}
		
		$this->render('login');
	}
}