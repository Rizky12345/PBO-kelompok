<?php
class Human{
  public $bagian_kepla;
  private $nama;
  private $detail;
  function nama($nama){
    $this->nama = $nama;
    return $this->nama;
  }
  function kepala($top){
    $this->detail = $top;
    return $this->detail;

  }
  function badan($center){
    $this->detail = $center;
    return $this->detail;
  }
  function kaki($bottom){
    $this->detail = $bottom;
    return $this->detail;
  }
}
class panyawat extends human{
  protected $penyakit;
  function penyakit($penyakit){
    $this->penyakit = $penyakit;
    return $this->penyakit;
  }
  function dokter($p){
    if (empty($p['penyakit-kepala'])) {
      $a = "Dokter Prodedi";
      return $a;
    }else{
      $a = "Dokter Budi Anduk";
      return $a;
    }
  }
}

$human = new human;
$panyawat = new panyawat;



?>
<?php 
if (isset($_GET['name'])) {
  echo "<h1>Bagian badan dan riwayat penyakit</h1>";
  echo "namanya: ".$human->nama($_GET['name'])."<br>";
  echo "<h3>Bagian Kepala</h3>";
  echo "Detail kepala: ".$human->kepala($_GET['detail-kepala'])."<br>";
  echo "penyakitnya: ".$panyawat->penyakit($_GET['penyakit-kepala']);
  echo "<h3>Bagian badan</h3>";
  echo "Detail badan: ".$human->badan($_GET['detail-badan'])."<br>";
  echo "penyakitnya: ".$panyawat->penyakit($_GET['penyakit-badan']);
  echo "<h3>Bagian kaki</h3>";
  echo "Detail kaki: ".$human->kaki($_GET['detail-kaki'])."<br>";
  echo "penyakitnya: ".$panyawat->penyakit($_GET['penyakit-kaki']);

  echo " <br>";
  echo " <br>";
  echo "dokter yang menangani anda: ".$panyawat->dokter($_GET);
}else{ ?>
  <form action="" method="get">
    <h1>Data Badan</h1>
    nama kamu: <input type="text" name="name"><br>
    <h3>Bagian Kepala</h3>
    Detail kepala: <textarea name="detail-kepala"></textarea><br>
    Penyakit di kepala: <input type="text" name="penyakit-kepala">
    <h3>Bagian badan</h3>
    Detail badan: <textarea name="detail-badan"></textarea><br>
    Penyakit di badan: <input type="text" name="penyakit-badan">
    <h3>Bagian kaki</h3>
    Detail kaki: <textarea name="detail-kaki"></textarea><br>
    Penyakit di kaki: <input type="text" name="penyakit-kaki">
    <br>
    <br>
    <button name="submit">submit</button>
  </form>
<?php } ?>





