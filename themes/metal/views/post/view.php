<div class="container-fluid">
	
	<!-- the breadcrumbs -->
    <ul class="page-breadcrumb breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="index.php?r=post/list">News</a>
		</li>
	</ul>

  <div class="row-fluid">
    <?php require '_side.php';?>
    
    <!-- The Show area -->
    <div class="span9">
	  
	  <div class="postWrap">
	    <h1 class="title"><?php echo $post->title?></h1>
		<p class="info"> <?php echo $post->create_time?>
		<span class="split">|</span> Post: <?php echo $post->author?><span class="split">|</span> Viewed: <em id="_viewnum"><?php echo $post->view_count?></em></p>
      </div>
      
      <div class="cdata clear">
        <table cellpadding="0" cellspacing="0" class="showTb">
          <tbody>
            <tr>
              <td id="postContent"><?php echo $post->content?></td>
            </tr>
          </tbody>
        </table>
	  </div>
	  
	  <hr>
	  
	  <!--Tags-->
      <?php if($post->tags):?>
        <?php 
  			$tags = @explode(',', $post->tags);
  		?>
  		<div class="postTags clear">
        <p class="tagsTitle floatL">Tags:</p>
        <ul>
		  <?php foreach($tags as $tag):?>
		    <i class="icon-tag"></i>
		    <a href="<?php echo $this->createUrl('tag/post',array('name'=>urlencode($tag))) ?>" target="_blank" title="<?php echo $tag?>"><?php echo $tag?></a>
		  <?php endforeach?>
        </ul>
      	</div>
      	<?php endif?>
      	
      	<hr>
      	
      	<!-- Pre Post -->
      	<p>Pre article</p>
      	<?php if ($pre != null):?>
      		<a href="index.php?r=post/show&id=<?php echo $pre->id?>"><?php echo $pre->title;?></a>;
      	<?php else:?>
      		<p>None</p>
      	<?php endif;?>
      		
      	<!-- Next Post -->
      	<p>Next article</p>
      	<?php if ($next != null):?>
      		<a href="index.php?r=post/show&id=<?php echo $next->id?>"><?php echo $next->title;?></a>
      	<?php else:?>
      		<p>None</p>
      	<?php endif;?>
      	
      	<hr>
      	
      	<!-- Related article -->
      	<div class="postWrap">
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