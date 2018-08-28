<?php
	
	class Controller{

		public function __construct(){
			return header("Location: view/index.php");
		}

		public function view($page){
			return header("Location: view/".$page.".php");
		}
	}