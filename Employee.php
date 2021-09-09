<?php
	class Employee {
		
		public $name;
		public $title;
		public $salary;
		
		public function _construct($name, $title, $salary){
			$this->name = $name;
			$this->title = $title;
			$this->salary = $salary;
		}
		
		public function setEmployeeName($name){
			$this->name = $name;
		}
		
		public function getEmployeeTitle(){
			return $this->title;
		}
		
	}
?>