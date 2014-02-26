<div class="mainWrap">
	<div class="topDesc">
	  <div class="desc">
	  </div>
	</div>
	<div class="global clear">
		<div class="mainBox">
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
	          <li><a href="<?php echo $this->createUrl('tag/post',array('name'=>urlencode($tag))) ?>" target="_blank" title="<?php echo $tag?>"><?php echo $tag?></a></li>
	          <?php endforeach?>
	        </ul>
	      	</div>
	      	<?php endif?>
	  		<!--/Tags-->
	  		
	  		<!-- Next Post -->
		    <div class="preNext clear" > <em class="floatL">Previous:			
		    </div>
	  		
	  		<!-- /Next Post -->
		</div>
	</div>
</div>