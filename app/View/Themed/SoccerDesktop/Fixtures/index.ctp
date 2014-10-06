<?php

// echo "<pre>"; print_r($fixtures); 
?>

<div id="fixture">
<h3>Fixtures And Results</h3>
<table>
	<thead>
		<tr>
			<th></th>
			<th>Home</th>
			<th>VS</th>
			<th>Away</th>
			<th>Type</th>
			<th>Details</th>
		</tr>
	</thead>
	
		<?php foreach ($fixtures as $key => $value) {
			$dt = strtotime($value['Fixture']['date']);
			$day=date("D d",$dt);	

			$h=strtotime($value['Fixture']['time']);
			$new_time = date('H:i', $h);
		 ?>
		 <tr>
			<td><?php echo $day;?></td>
			<td><?php echo $value['HomeTeam']['name'];  ?></td>	
			<td><?php echo $new_time; ?></td>
			<td><?php echo $value['AwayTeam']['name'];  ?></td>
			<td><?php echo $value['TeamCategory']['name']; ?></td>
			<td><?php echo $this->Html->link("result",array('controller'=>'Fixtures','action'=>'result',$value['Fixture']['id'])); ?></td>

		</tr>
		<?php }  ?>
</table>
</div>


<STYLE TYPE="text/css">				
#fixture
{
	border: 1px solid;
	width: 70%;
}
</STYLE>