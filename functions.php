<?php 

$conn = mysqli_connect('localhost','root','','progres') or die("gagal konek");
//mode input
$id = '';
$nama = '';
$email = '';
$komentar = '';
$nameBtn = 'submit';
$valuesBtn = 'input';

if (isset($_POST['button']) && $_POST['button'] == 'input') {
	$query = mysqli_query($conn,"INSERT INTO guestbook(nama,email,komentar)
							VALUES(
								'".$_POST['nama']."',
								'".$_POST['email']."',
								'".$_POST['komentar']."'
							
							)") or die ("gagal input");
	header('Location: tablepisah.php');
}

if (isset($_POST['button']) && $_POST['button'] == 'update') {
	$query = mysqli_query($conn,"UPDATE guestbook SET
									nama= '".$_POST['nama']."',
									email = '".$_POST['email']."',
									komentar = '".$_POST['komentar']."'
									WHERE id = '".$_POST['id']."'
		") or die ("gagal update");
	header('Location:tablepisah.php');
}

if (isset($_GET['action']) && $_GET['action'] == "hapus") {
	$query = mysqli_query ($conn,"DELETE FROM guestbook WHERE id = '".$_GET['id']."'") or die("gagal hapus");
}



if (isset($_GET['action']) && $_GET['action'] == "update") {
	$query = mysqli_query ($conn,"SELECT * FROM guestbook WHERE id = '".$_GET['id']."'") or die("gagal ambil data");


$data = mysqli_fetch_array($query);
//mode update
$id = $data['id'];
$nama = $data['nama'];
$email = $data['email'];
$komentar = $data['komentar'];
$nameBtn = 'Update';
$valuesBtn = 'update';

}

 ?>