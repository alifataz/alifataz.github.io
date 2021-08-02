<?php require'functions.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="js/bootstrap.bundle.min.js"></script>
    <script type="js/bootstrap.min.js"></script>

   
    <title>halaman tampilkan data</title>

    <style type="text/css">
        

            body{
                background-image: url(img/g6.jpg);
                background-size: 1600px;
            }
            .container {
                background-color: #241236;
                padding: 50px;
                margin-top: 100px;
                
            }
             @font-face {
         font-family: "Grinched";
         src: url('GrinchedRegular.OTF');
         }
         h1 {
            font-family: Grinched;
            color: white;
            text-shadow: 2px 2px 5px purple;

         }
         a{
           text-decoration: none;
           color: #241236;
           font-weight: bolder;
         }
           

    </style>
</head>
<body>
	<?php $query = mysqli_query($conn,"SELECT * FROM guestbook"); ?>

 		<div class="container">
            <h1 class="mb-4">Guest Data</h1>
 			<table class="table table-secondary table-striped" border="1" cellspacing="0" cellpadding="10">
 			<tr>
 				<th>Nama</th>
 				<th>Email</th>
 				<th>Komentar</th>
 				<th colspan="4" class="text-center">Aksi</th>
 			</tr>

 			<?php while ($data = mysqli_fetch_array($query)) : ?>
 			<tr>
 				<td><?=  $data['nama']. "<br>"; ?></td>
 				<td><?=  $data['email']. "<br>"; ?></td>
 				<td><?=  $data['komentar']. "<br>"; ?></td>
 				<td class="text-center "><?= "<a href ='?action=hapus&id=".$data['id']."' onclick= 'return confirm (\" yakin hapus ? \")'> hapus </a>";?></td> |
 				<td class="text-center"><?= "<a href ='index.php?action=update&id=".$data['id']."' > update </a><br>"; ?></td>
 			</tr>
 			<?php endwhile; ?>
 			
 		</table>
    </div>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



