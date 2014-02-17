<div>
	<h2>CMS Information</h2>
	<br/>
	
	<h3>System Infomation</h3>
	
	<ul class="memlist">
		<li>
			<em>CMS information</em>
			<em class="memcont"><?php echo Yii::app()->params['cms_version']; ?></em>
		</li>
		<li>
			<em>PHP程式版本:</em>	
			<em class="memcont"><?PHP echo PHP_VERSION; ?></em>
		</li>
		<li>
			<em>ZEND版本:</em>	
			<em class="memcont"><?PHP echo zend_version(); ?></em>
		</li>
		<li>
			<em>服务器操作系统:</em>	
			<em class="memcont"><?PHP echo PHP_OS; ?></em>
		</li>
		<li>
			<em>服务器端信息:</em>	
			<em class="memcont"><?PHP echo $_SERVER['SERVER_SOFTWARE']; ?></em>
		</li>
		<li>
			<em>最大上传限制:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件"; ?></em>
		</li>	
		<li>
			<em>最大执行时间:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("max_execution_time")."秒"; ?></em>
		</li>
		<li>
			<em>运行占用最大内存:</em>	
			<em class="memcont"><?PHP echo get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无" ?></em>
		</li>		
	</ul>
</div>