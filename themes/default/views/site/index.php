
<hr> 

<div class="row-fluid">
  <div class="span4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="caption"><i class="icon-home"></i> ABOUT</div>
        <div class="actions">
          <a href="index.php">more...</a>
        </div>
      </div>
      <div class="panel-body">
        <p> <b>SpiritCMS</b> is a fast, safe CMS written by php. it's simple but with full features, ease to extend to meet your needs, You are free to use this software, Please contact us if you want some support.</p>
	    <ul>
	      <li><i class="icon-map-marker"></i> Pudong New District, Shanghai</li>
	      <li><i class="icon-envelope"></i> menggangcsu@gmail.com</li>
	      <li><i class="icon-leaf"></i> 13788938565</li>
	    </ul>	       
      </div> 
    </div>
  </div>
  <div class="span4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="caption"><i class="icon-th-list"></i> FEATURES</div>
        <div class="actions">
          <a href="index.php">more...</a>
        </div>
      </div>
      <div class="panel-body">
        <ul>
	      <li>SIMPLE</li>
	      <li>SAFE</li>
	      <li>STATBLE</li>
	    </ul>
      </div> 
    </div>  
  </div>
  <div class="span4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="caption"><i class="icon-edit"></i> NEWS</div>
        <div class="actions">
          <a href="index.php?r=post/list">more...</a>
        </div>
      </div>
      <div class="panel-body">
        <ul>
	  	<?php foreach($post as $key=>$value):?>
	  	<li>
	  	<a href="<?php echo $this->createUrl('post/show',array('id'=>$value['id']))?>" target="_blank"><?php echo $value['title']?></a>
	  	<?php echo date('m-d',strtotime($value['create_time']))?>
	  	</li>
	  	<?php endforeach?>
	  </ul> 
      </div> 
    </div>  
  </div>
</div>
