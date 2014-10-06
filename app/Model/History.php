<?php
	class History extends AppModel {
		public $useTable = 'history';
		public $name='History';

		public function gethistory()
		{
			$find=$this->find('all',array('conditions'=>array('History.club_id'=>'2')));
			return $find;
		}
		
	}
?>