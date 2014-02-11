<?php

class Portlet extends CWidget
{
	public $title;
	public $cssClass='portlet';
	public $headerCssClass='header';
	public $contentCssClass='content';
	public $visible=true;

	/**
	 * the init function
	 * @see CWidget::init()
	 */
	public function init()
	{
		if(!$this->visible)
			return;
		echo "<div class=\"{$this->cssClass}\">\n";
		if($this->title!==null)
			echo "<div class=\"{$this->headerCssClass}\">{$this->title}</div>\n";
		echo "<div class=\"{$this->contentCssClass}\">\n";
	}

	/**
	 * (non-PHPdoc)
	 * @see CWidget::run()
	 */
	public function run()
	{
		if(!$this->visible)
			return;
		$this->renderContent();
		echo "</div><!-- {$this->contentCssClass} -->\n";
		echo "</div><!-- {$this->cssClass} -->";
	}

	protected function renderContent()
	{
	}
}