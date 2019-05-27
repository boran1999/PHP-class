<?php
class Human{
	private $firstname;
	private $secondname;
	private $lastname;

	function Human($fn, $sn, $ln){
		$this->firstname=$fn;
		$this->secondname=$sn;
		$this->lastname=$ln;
	}

	public function get_full_name(){
		return $this->secondname." ".$this->firstname." ".$this->lastname;
	}
}
