<?php
	class AboutusController extends AppController {
		public $name = 'AboutUs';
		public $helpers= array('Html' , 'Form');
		public $uses=array('CommitteMember','History');


		public function beforeFilter() {
			parent::beforeFilter();
		}

		public function index() {

		}

		public function committe_member()
		{
			$img=$this->CommitteMember->getimage();
			$this->set('img',$img);
			$key='';
			if(isset($this->request->params['pass']['0']))
			{
				$key=$this->request->params['pass']['0'];
			}
			$find=$this->CommitteMember->getdata($key);
			$this->set('committe_member',$find);
		}

		public function history()
		{
			$history_data=$this->History->gethistory();
			$this->set('history_data',$history_data);
		}
	}
?>