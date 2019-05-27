<?php

include "Human.php";

class Schoolboy extends Human{
	private $scores = [];
	private $attendence = [];
	public function Schoolboy($fn, $sn, $ln, $sc, $at){
		parent::Human($fn,$sn,$ln);
		$this->scores=$sc;
		$this->attendence=$at;
	}
	public function count_attendance(){
		$ycount=0;
		for($i=0;$i<count($this->attendence);$i++){
			if($this->attendence[$i]=='+'){
				$ycount+=1;
			}
		}
		return $ycount;
	}
	public function count_unattendance(){
		$ncount=0;
		for($i=0;$i<count($this->attendence);$i++){
			if($this->attendence[$i]=='-'){
				$ncount+=1;
			}
		}
		return $ncount;
	}
	public function get_av_score(){
		$summ=0;
		for($i=0;$i<count($this->scores);$i++){
			$summ+=$this->scores[$i];
		}
		(float)$avv=$summ/count($this->scores);
		return $avv;
	}

}
