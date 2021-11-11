<?php 

class kelas{
	public $data;
	public $kelas;
	function __construct(){
		$this->data = [
			[
				"nama" => "rizky",
				"kelas" => "A"
			],
			[
				"nama" => "ujang",
				"kelas" => "A"
			],
			[
				"nama" => "neneng",
				"kelas" => "B"
			],
			[
				"nama" => "mpi",
				"kelas" => "B"
			],
			[
				"nama" => "agus",
				"kelas" => "C"
			],
			[
				"nama" => "padil",
				"kelas" => "C"
			],
			[
				"nama" => "ncek",
				"kelas" => "D"
			],
			[
				"nama" => "ghandi",
				"kelas" => "D"
			]
		];
	}
	public function execute($key){
		echo "ini kelas ".$key."<br>";
		
		switch ($key) {
			case 'A':
			$this->kelas = $key;
			break;
			case 'B':
			$this->kelas = $key;
			break;
			case 'C':
			$this->kelas = $key;
			break;
			case 'D':
			$this->kelas = $key;
			break;
			
			default:
				echo "kelas tidak ditemukan";
			break;
		}

	}
	public function __destruct(){
		echo "<br>";
		foreach ($this->data as $data) {
			if ($data['kelas'] == $this->kelas) {
				echo $data['nama']."<br>";
			}
		}
	}
}

$app = new kelas;
echo $app->execute("A");
?>
