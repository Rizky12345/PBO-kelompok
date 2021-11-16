<?php
	//Buat class 
    class byte {
    	public $angka;
        public $type;
    }
    //Buat inheritance 
    //turunkan class buah ke kelas pemilik 
    class hitung extends byte {
    	public function __construct ($a, $b){
                $this->angka = $a;
        $this->type = $b;
            switch ($this->type) {
        	case 'gb':
            $n = $this->angka*1000;
            	echo "hasil dari ".$this->angka.$this->type." ke MB = ".$n."mb";
                break;
            case 'mb':
            	echo "hasil dari ".$this->angka.$this->type." ke MB = ".$this->angka.$this->type;
            break;
                        case 'kb':
                        $n = $this->angka/1024;
            	echo "hasil dari ".$this->angka.$this->type." ke MB = ".$n."mb";
            break;
        
        	default:
            	# code...
            break;
    }
        } 
    }
    //instansi objek 
    $bape = new hitung("2343", "gb");
    
?> 

