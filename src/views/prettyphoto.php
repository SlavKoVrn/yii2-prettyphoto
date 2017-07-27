<div class="<?= $class ?>" >
    <div id="<?= $id ?>" >
    		<?php 
    		$first=true;
    		foreach($images as $image){
    			if ($first){
    				$first=false;
    				$vid='';
    			}else
    				$vid='style="display:none"';
    			?>
    			<a <?php echo $vid; ?> href="<?= $image['src'] ?>" itemprop="image" class="zoom" title="<?= $image['title'] ?>" data-rel="prettyPhoto[<?= $id ?>]">
    				<img src="<?= $image['src'] ?>" alt="<?= $image['title'] ?>">
    			</a>
    		<?php } ?>
    
    </div>
</div>
