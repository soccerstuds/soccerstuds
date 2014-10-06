<div>
	<?php
		foreach ($img as $key => $value) {
		 ?>
			<div class="com_mem" >
				<?php if(empty($value['Image']['id']))
				{ 

					echo html_entity_decode($this->Html->link(
					    $this->Html->image("/img/default.jpg",array("alt"=>"icon")),
					    "/Aboutus/committe_member/".$value['CommitteMember']['id']
					));

				}
				else
				{ 
					echo html_entity_decode($this->Html->link(
					    $this->Html->image($value['Image']['url'],array("alt"=>"icon")),
					    "/Aboutus/committe_member/".$value['CommitteMember']['id']
					));
					
					
					
				 } ?>
			</div>
		<?php }
	?>
</div>
<div style="clear:both;"></div>
<?php //echo "<pre>"; print_r($committe_member); exit;  ?>
<div id="bio" style="border: 1px solid; width: 70%; float:left;">
	<?php if(empty($committe_member['Image']['id']))
				{ 

					echo $this->Html->image("/img/default.jpg",array("alt"=>"icon"));
					    
				}
				else
				{ 
					
					   echo $this->Html->image($committe_member['Image']['url'],array("alt"=>"icon"));
					
					
				 } ?>

		<label>Name:<?php echo $committe_member['CommitteMember']['name']; ?></label>
		<label>Designation:<?php echo $committe_member['CommitteMember']['designation']; ?></label>
		<label>DOB:<?php echo $committe_member['CommitteMember']['dob']; ?></label>
		<p>
			<?php echo $committe_member['CommitteMember']['biography'];  ?>
		</p>
		
</div>
<div id="comm_list" style="border: 1px solid; width: 15%; float:right;">
	<h3>List Of Committe Members</h3>
	<ol>
	<?php
		foreach ($img as $key => $value) { ?>
			<li>

			<?php echo $this->Html->link($value['CommitteMember']['name']	,"/Aboutus/committe_member/".$value['CommitteMember']['id']); ?>
			</li>
	<?php	}
	?>
	</ol>
</div>


<STYLE TYPE="text/css">
.com_mem
	{
		list-style-type: none;
		float: left;
		padding: 20px;
	}
</STYLE>
