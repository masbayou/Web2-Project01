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
function hna($hna){
    if ($hna > 55 ) {
    return 'Siswa Lulus';
}
else {
    return 'Siswa Tidak Lulus';
}
}

function grade($hna){
    if ($hna > 0 && $hna <= 35){
    return 'E';
}
elseif ($hna > 36 && $hna <= 55){
    return 'D';
}
elseif ($hna > 56 && $hna <= 69){
   return 'C';
}
elseif ($hna > 70 && $hna <= 84){
  return 'B';
}
elseif ($hna > 85 && $hna <= 100){
    return 'A';
}
else {
   return 'I';
}
}

function komentar($grade){
    switch ($grade) {
    case 'A' :
        return "Sangat Memuaskan";
        break;

    case 'B' :
        return "Memuaskan";
        break;
    
    case 'C' :
        return "Cukup";
        break;
    
    case 'D' :
        return "Kurang";
        break;

    case 'E' :
        return "Sangat Kurang";
        break;
    
    default:
        return "Tidak Ada";
}
}

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
