<?php 
	class Team extends AppModel {
		public $name= "Team";
		public $usetable= "teams";

		public function getteam()
		{
			$find_team=$this->find('all',array('conditions'=>array('Team.club_id'=>'2')));
			return $find_team;
		}
	}
?>