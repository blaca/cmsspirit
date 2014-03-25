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
	  
	  <!--Tags-->
      <?php if($post->tags):?>
        <?php 
  			$tags = @explode(',', $post->tags);
  		?>
  		<div class="breadcrumb">
        Tags:
		  <?php foreach($tags as $tag):?>
		    <i class="icon-tag"></i>
		    <a href="index.php?r=post/list&tag=<?php echo $tag?>"><?php echo $tag?></a>
		  <?php endforeach?>
      	</div>
      	<?php endif?>
      	
      	<hr>
      	
      	<!-- Pre Post -->
      	<p>Pre Article:
      	<?php if ($pre != null):?>
      		<a href="index.php?r=post/show&id=<?php echo $pre->id?>"><?php echo $pre->title;?></a>
      	<?php else:?>
      		None
      	<?php endif;?>
      	</p>
      		
      	<!-- Next Post -->
      	<p>Next Article:
      	<?php if ($next != null):?>
      		<a href="index.php?r=post/show&id=<?php echo $next->id?>"><?php echo $next->title;?></a>
      	<?php else:?>
      		None
      	<?php endif;?>
      	</p>
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