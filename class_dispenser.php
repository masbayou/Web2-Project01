<?php 
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        return $this->volume = $vol;
    }

    public function harga($hG){
        return $this->hargaSegelas = $hG;
    }

    public function volG($volG){
        return $this->volumeGelas = $volG; 
    }
    
    public function nama($nM){
        return $this->namaMinuman = $nM;
    }
    
   
}
// $pepsi = new Dispenser();
// echo "Nama Minuman : ".$pepsi -> nama = 'Pepsi';
// echo '</br>';
// echo "Volume Botol Minuman : ".$pepsi -> isi(1000)." Ml";
// echo '</br>';
// echo "1 Gelas Seharga : ".$pepsi -> harga('Rp.1500');
// echo '</br>';
// echo "Jamal Membeli 1 Gelas air pepsi dengan Harga ".$pepsi -> harga('Rp.1500')." dengan volume gelas sebesar ".$pepsi -> volG(250)." Ml";
// echo '</br>';
// echo "Sisa Volume botol minuman Pepsi sebesar : ".$pepsi -> isi(1000) - $pepsi -> volG(250). " Ml";

?>