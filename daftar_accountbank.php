<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Program Studi Teknik Informatika</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="ti.php">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum 1</a></li>
						<li class="breadcrumb-item active">01_info</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">PHP Info</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
                        <?php 
class account {
    public $nama;
    protected $nomor;
    private $saldo;
    

    function __construct($nama,$nomor, $saldo){
        $this -> nama = $nama;
        $this -> nomor = $nomor;
        $this -> saldo = $saldo;
    }
    
    public function deposit($uang){
        $this -> saldo = $this-> saldo + $uang;
    }

    public function withdraw($uang){
        $this -> saldo = $this -> saldo - $uang;
    }

    public function cetak(){
        echo "</br>Nama : ".$this -> nama;
        echo "</br>No Account : ".$this -> nomor;
        echo "</br>Saldo : ".$this -> saldo;
        echo "</br>";
    }
}

$cs1 = new account ('Ahmad','C001', 60000000);
$cs1 -> deposit(10000000);
$cs1 -> cetak(); 
echo "Ahmad Menabung Uang Sebesar Rp 1.000.000";

echo "</br>";
$cs2 = new account ('Budi', 'C002', 5350000);
$cs2 -> withdraw(2500000);
$cs2 -> cetak();
echo "Budi Menarik Uang Sebesar Rp.2.500.000";

echo "</br>";
$cs3 = new account ('Kurniawan', 'C003',2500000);
$cs3 -> cetak();




?>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
