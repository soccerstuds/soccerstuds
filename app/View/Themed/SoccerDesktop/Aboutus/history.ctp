<?php

	$history_type=array('club'=>'club','school'=>'school','teams'=>'teams');

?>
<div>
	<h3>History</h3>
	<?php echo $this->Form->input('team',array('label'=>false,'type'=>'select','options'=>$history_type,'id'=>'select_history'));   ?>
	<?php foreach ($history_data as $key => $value) {
			// echo "<pre>"; print_r($value);
	?>
		<div id="<?php echo $value['History']['type']; ?>" class="history">
			<p>
				<?php
				echo $value['History']['type'];
					echo $value['History']['description'];
				?>
			</p>
		</div>

	<?php 
	} ?>
</div>

<script type="text/javascript">
$(".history").hide();
$("#club").show();
$('#select_history').on('change', function(){
  
  
  n=$( "#select_history option:selected" ).text();

  $(".history").hide();
  $("#"+n).show();
  
  
  
});
</script>