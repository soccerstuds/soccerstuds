<?php
	class FixturesController extends AppController {
		public $name = 'Fixtures';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Fixture');

		public function index()
		{

			$find_fixture=$this->Fixture->getFixture();
			$this->set('fixtures',$find_fixture);
		}

		public function result($fixtureid)
		{
			echo "<pre>"; print_r($fixtureid); exit;
		}


	}

?>