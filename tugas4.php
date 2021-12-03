<?php 
abstract class byte{
	public $a;
	public $b;
	public $c;
	public $d;
	public function __construct($a,$b, $c){

		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	abstract public function giga();
}

class hitung extends byte{
	public function giga(){
		switch ($this->b) {
			case 'b':
				if ($this->c == "b") {
					$this->d = $this->a;
					return $this->d;
				}else if($this->c == "kb"){
					$this->d = $this->a/1000;
					return $this->d;
				}
				else if($this->c == "mb"){
					$this->d = $this->a/1000/1024;
					return $this->d;
				}
				else if($this->c == "gb"){
					$this->d = $this->a/1000/1024/1024;
					return $this->d;
				}else{
					$this->d ="tidak bisa lebih";
					return $this->d;
				}
			break;
			case 'kb':
				if ($this->c == "b") {
					$this->d = $this->a*1000;
					return $this->d;
				}else if($this->c == "kb"){
					$this->d = $this->a;
					return $this->d;
				}
				else if($this->c == "mb"){
					$this->d = $this->a/1024;
					return $this->d;
				}
				else if($this->c == "gb"){
					$this->d =$this->a/1024/1024;
					return $this->d;
				}else{
					$this->d ="tidak bisa lebih";
					return $this->d;
				}
			break;
			case 'mb':
				if ($this->c == "b") {
					$this->d = $this->a*1000*1024;
					return $this->d;
				}else if($this->c == "kb"){
					$this->d = $this->a*1024;
					return $this->d;
				}
				else if($this->c == "mb"){
					$this->d = $this->a;
					return $this->d;
				}
				else if($this->c == "gb"){
					$this->d = $this->a/1024;
					return $this->d;
				}else{
					$this->d ="tidak bisa lebih";
					return $this->d;
				}
			break;
			case 'gb':
				if ($this->c == "b") {
					$this->d = $this->a*1000*1024*1024;
					return $this->d;
				}else if($this->c == "kb"){
					$this->d = $this->a*1000*1024;
					return $this->d;
				}
				else if($this->c == "mb"){
					$this->d = $this->a*1024;
					return $this->d;
				}
				else if($this->c == "gb"){
					$this->d = $this->a;
					return $this->d;
				}else{
					$this->d ="tidak bisa lebih";
					return $this->d;
				}
			break;
			default:
			$this->d = "tidak bisa lebih";
				return $this->d;
			break;
		}
	}
}
class tulisan extends byte{
	
	public function giga()
	{
		if ($this->d !== "tidak bisa lebih") {
			echo "hasil dari ".$this->a.$this->b." ke "."$this->c"." = ";
			
		}else{
			echo "hanya b,kb,mb,dan gb yang bisa";
			
		}
		
	}
}
$app = new hitung(2000,"mb","kb");
$appp = new tulisan(2000,"mb","kb");

echo $appp->giga();
echo $app->giga();


?>