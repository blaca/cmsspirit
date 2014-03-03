<div class="container-fluid">
  <div class="row-fluid">
    <?php require '_side.php';?>
    
    <!-- The Show area -->
    <div class="span9">
      <!-- the breadcrumbs -->
      <ul class="page-breadcrumb breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> > 
		</li>
		<li>
			<a href="index.php?r=post/list">News</a>
		</li>
	  </ul>
	  
	  <div class="postWrap">
	    <h1 class="title"><?php echo $model->title?></h1>
		<p class="info"> <?php echo $model->create_time?>
		<span class="split">|</span> Post: admin<span class="split">|</span> Viewed: <em id="_viewnum"><?php echo $model->view_count?></em></p>
      </div>
      
      <div class="cdata clear">
        <table cellpadding="0" cellspacing="0" class="showTb">
          <tbody>
            <tr>
              <td id="postContent"><?php echo $model->content?></td>
            </tr>
          </tbody>
        </table>
	  </div>
	  
	  <!--Tags-->
      <?php if($model->tags):?>
        <?php 
  			$tags = @explode(',', $model->tags);
  		?>
  		<div class="postTags clear">
        <p class="tagsTitle floatL">Tags:</p>
        <ul class="tagsList clear">
          <?php foreach($tags as $tag):?>
          <li>
            <i class="icon-tag"></i>
            <a href="<?php echo $this->createUrl('tag/post',array('name'=>urlencode($tag))) ?>" target="_blank" title="<?php echo $tag?>"><?php echo $tag?></a>
          </li>
                <?php endforeach?>
        </ul>
      	</div>
      	<?php endif?>
      	
      	<!-- Last Post -->
      	
      	<!-- Next Post -->
      	
      	<!-- Related article -->
      	<div class="postWrap">
      	  <div class="portlet">
		      <div class="portlet-title">
		        <div class="caption">related articles</div>
		        <div class="actions">
		          <a href="index.php">more...</a>
		        </div>
		      </div>
		      <div class="portlet-body">
		        <ul>
			    </ul>
		      </div> 
		  </div>
		  <div class="portlet">
		      <div class="portlet-title">
		        <div class="caption">comment disabled</div>
		      </div>
		      <div class="portlet-body">
		        <ul>
			    </ul>
		      </div> 
		  </div>       
      	</div>
    </div>
  </div>
</div>