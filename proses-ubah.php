
<?php
// memanggil file siswa.php
require_once 'siswa.php';
    
if (isset($_POST['simpan'])) {
	if (isset($_POST['nis'])) {

		// membuat objek siswa
    	$siswa = new siswa();

    	// ambil data hasil submit dari form
		$nis           = $_POST['nis'];
		$nama          = trim($_POST['nama']);
		$tempat_lahir  = trim($_POST['tempat_lahir']);

		$tanggal       = $_POST['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama         = $_POST['agama'];
		$alamat        = trim($_POST['alamat']);
		$no_telepon    = $_POST['no_telepon'];

		// update data siswa
    	$siswa->update($nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$no_telepon,$nis);		
	}
}					
?>