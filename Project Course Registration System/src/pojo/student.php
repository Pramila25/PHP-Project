<?php
class student{
	public $firstname, $lastname,$bdate,$contact,$address;
	
	function __construct($param1, $param2, $param3, $param4, $param5){
		$this->firstname = $param1;
		$this->lastname = $param2;
		$date=date_create($param3);
		$date =date_format($date,"Y/m/d");
		$this->bdate = $date;
		$this->contact = $param4;
		$this->address = $param5;		
	}
}
?>