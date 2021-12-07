<?php

class hitungan{
	public $a;
    public $b;
    public $c;
	public function __construct($a,$b,$c){
    	$this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    final public function proses(){
    	$hitunglah = $this->a + $this->b + $this->c;
        return $hitunglah;
    }
}
$hitung = new hitungan(10,20,30);
echo $hitung->proses();
?>