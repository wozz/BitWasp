        <div class="span9 mainContent" id="admin-panel">
		  
		  <?php echo $nav; ?>
			
		  <div class="container-fluid">
			
<?php foreach($jobs as $index => $job) { 
	if($index == 'price_index' && $config['price_index'] == 'Disabled')
		continue;
?>
			<div class="row-fluid">
			  <div class="span3"><?php echo $job['name']; ?></div>
			  <div class="span2"><?php 
			  
			  if($job['interval'] == '0'){
			      echo 'Disabled';
		      } else {	
				  echo $job['interval']." ".$job['interval_type']; 
			  }?></div>
			  <div class="span4">Last Run: <?php echo $job['time_f']; ?>.</div>
			</div>
<?php } ?>
		  </div>
		</div>
