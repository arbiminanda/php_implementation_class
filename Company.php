<?php
	class Company{
		public $name;
		
		public function _construct($name){
			$this->name = $name;
		}
		
		public function setCompanyName($name){
			$this->name = $name;
		}
		
		public getCompanyName() {
			return $this->name;
		}
	}
?>