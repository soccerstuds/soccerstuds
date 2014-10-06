<?php 
	class Fixture extends AppModel {
		public $name= "Fixture";
		public $usetable= "fixtures";

		public $belongsTo=array('TeamCategory'=>array(
									'className'=>'TeamCategory',
									'foreignKey'=>'type'),
								'HomeTeam'=>array(
									'className'=>'Team',
									'foreignKey'=>'homeid'),
								'AwayTeam'=>array(
									'className'=>'Team',
									'foreignKey'=>'away_registered_id'));


		public function getFixture()
		{
			$find=$this->find('all',array('conditions'=>array('Fixture.status'=>'post')));
			return $find;
		}

		
	}
?>