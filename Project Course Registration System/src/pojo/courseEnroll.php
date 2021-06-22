<?php
class courseEnroll{
	public $course_id, $course_title,$date_enrolled,$grade,$semester,$enroll_id;
	
	function __construct($param1, $param2, $param3,$param4,$param5,$param6){
		$this->course_id = $param1;
		$this->course_title = $param2;
		$date=date_create($param4);
		$date =date_format($date,"Y/m/d");
		$this->date_enrolled = $date;
		$this->grade = $param3;	
		$this->semester = $param5;
		$this->enroll_id = $param6;
	}
		
}
?>