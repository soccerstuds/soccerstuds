<?php 
	class CommitteMember extends AppModel {
		public $name= "CommitteMember";
		public $useTable= "commitee_members";

		public $belongsTo=array('Image'=>array(
									'className'=>'Image',
									'foreignKey'=>'image_id'));

		public function getdata($key=NULL)
		{
			if($key!='')
			{
				$find=$this->find('first',array('conditions'=>array('AND'=>array('CommitteMember.id'=>$key,
																			'CommitteMember.club_id'=>'2'))));
			}
			else
			{
				$find=$this->find('first');
			}

			
			return $find;
		}

		public function getimage()
		{
			$img=$this->find('all',array('conditions'=>array('CommitteMember.club_id'=>'2')));
			return $img;
		}


	}
?>