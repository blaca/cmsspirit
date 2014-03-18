<div>
	<h2>CMS Information</h2>
	<br/>
	
	<h3>
		<?php echo "Here's welcome information."?>
	</h3>
	<h3>
		<?php echo "And here's memo"?>
	</h3>
	<br/>
	
	<h3>System Infomation</h3>
	
	<ul class="memlist">
		<li>
			<em>CMS information</em>
			<em class="memcont"><?php echo Yii::app()->params['cms_version']; ?></em>
		</li>
		<li>
			<em>PHP Version:</em>	
			<em class="memcont"><?PHP echo PHP_VERSION; ?></em>
		</li>
		<li>
			<em>ZEND Version:</em>	
			<em class="memcont"><?PHP echo zend_version(); ?></em>
		</li>
		<li>
			<em>Operate System:</em>	
			<em class="memcont"><?PHP echo PHP_OS; ?></em>
		</li>
		<li>
			<em>Server Info:</em>	
			<em class="memcont"><?PHP echo $_SERVER['SERVER_SOFTWARE']; ?></em>
		</li>
		<li>
			<em>Upload Limit:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件"; ?></em>
		</li>	
		<li>
			<em>Max exec.time:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("max_execution_time")."Sec"; ?></em>
		</li>
		<li>
			<em>Memory limit:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无" ?></em>
		</li>		
	</ul>
</div>