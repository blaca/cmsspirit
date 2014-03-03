<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout;
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $mainMenu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	/**
	 *  @var the cms version.
	 */
	protected static $version = 'Spirit v1.0.0';
	/**
	 * @var the CMS name
	 */
	protected static $SpCMS = 'Spirit CMS';
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha'=>array(
						'class'=>'CCaptchaAction',
						'backColor'=>0xFFFFFF,
				),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page'=>array(
						'class'=>'CViewAction',
				),
		);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CController::init()
	 */
	public function init()
	{		
		$catalog = Catalog::model()->findAll(new CDbCriteria);
		
		foreach ($catalog as $key=>$model) {
			
			if($model['parent_id'] == 0) {
				// find it's childs, and push it into an new array;
				$menuitems = array();
				
				foreach ($catalog as $name=>$value) {
					
					if ($model['id'] == $value['parent_id']) {						
						// add it to the single menu.
						$arr = array($value['catalog_name']=>$value['catalog_name_alias']);
											
						array_push($menuitems, $arr);
					}
				}
				
				$parentMenu = array($model['catalog_name'] => $menuitems);
				
				array_push($this->mainMenu, $parentMenu);
			}
		}

		// for debug.
		// print_r($this->mainMenu);
	}
	
	/**
	 * get the menu in the catalog.
	 * @return array
	 */
	public function getMenu()
	{
		return $menu;
	}
	
	/**
	 * Renders a view with a layout.
	 *
	 * This method first calls {@link renderPartial} to render the view (called content view).
	 * It then renders the layout view which may embed the content view at appropriate place.
	 * In the layout view, the content view rendering result can be accessed via variable
	 * <code>$content</code>. At the end, it calls {@link processOutput} to insert scripts
	 * and dynamic contents if they are available.
	 *
	 * By default, the layout view script is "protected/views/layouts/main.php".
	 * This may be customized by changing {@link layout}.
	 *
	 * @param string $view name of the view to be rendered. See {@link getViewFile} for details
	 * about how the view script is resolved.
	 * @param array $data data to be extracted into PHP variables and made available to the view script
	 * @param boolean $return whether the rendering result should be returned instead of being displayed to end users.
	 * @return string the rendering result. Null if the rendering result is not required.
	 * @see renderPartial
	 * @see getLayoutFile
	 */
	public function render($view,$data=null,$return=false)
	{
		if($this->beforeRender($view))
		{
			$output=$this->renderPartial($view,$data,true);
			if(($layoutFile=$this->getLayoutFile($this->layout))!==false)
				$output=$this->renderFile($layoutFile,array('content'=>$output),true);
	
			$this->afterRender($view,$output);
	
			$output=$this->processOutput($output);
	
			if($return)
				return $output;
			else
				echo $output;
		}
	}
}