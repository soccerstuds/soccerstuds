<?php
	foreach ($teams as $key => $value) {
		$team_name[$value['Team']['name']]=$value['Team']['name']; 
	}
	 echo $this->Form->input('team',array('label'=>false,'type'=>'select','options'=>$team_name)); 
?>