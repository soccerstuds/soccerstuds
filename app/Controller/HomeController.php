<?php
	class HomeController extends AppController {

		public $uses= array('User');

		public function beforeFilter() {
			parent::beforeFilter();
		}

		public function index() {

		}
	}
?>