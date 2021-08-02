<?php require'functions.php'; ?>
<!-- X x -->



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>progress guestbook</title>
    <style type="text/css">

    	body {
    		background-image: url(img/g6.jpg);
    		background-size: 1600px;
            
    	}
        
        input, textarea:focus {
        outline: none;
        
        }
    	
    	input, textarea {

    		border: none;
    		border-bottom: 2px solid white;
    		width: 300px;
    		background: rgba(0, 0, 0, 0);


    	}
    	label {
    		position: relative;
    		left: 45px;
    		color: white;	
    	}
    	img {
    		position: relative;
    		right: 20px;
    		width: 18px;
    	}
    	form {
    		margin-top: 180px;
    	}
        
            
        @font-face {
         font-family: "Grinched";
         src: url('GrinchedRegular.OTF');
         }
         h1 {
            font-family: Grinched;
            font-size: 60px;
            margin-top: 100px;
            margin-left: 28px;
            color: white;
            text-shadow: 2px 2px 5px black;
        }

    </style>
 </head>
 <body>
    <h1 class="position-absolute start-50 translate-middle shadow-lg p-3 mb-5 " >Leave your Mark</h1>
 	<div class="container" class="position-relative ">
 	<form action="" method="post" class="position-absolute start-50 translate-middle top-50" >
 		<table>
 		<input type="hidden" name="id" value="<?= $id ?>">
 		
 		<tr>
 			<td><label for="nama" class="mb-3"  >Nama </label></td>
 			<td><input type="text"  class="mt-3" name="nama" value="<?= $nama ?>"></td>
 			<td><img src="img/user.png"class="mb-3"></td>
 		</tr>

 		<tr>
 			<td><label for="email" class="mb-3">Email </label></td>
 			<td><input  type="text" class="mt-3" name="email" value="<?= $email ?>"></td>
 			<td><img src="img/email.png" class="mb-3"></td>
 		</tr>

 		<tr>
 			<td>&nbsp;</td>
 			<td><textarea name="komentar" placeholder="komentar"><?= $komentar ?></textarea></td>
 		</tr>

 		<tr>
 			<td>&nbsp;</td>
 			<td><button type="submit" class="btn btn-outline-light" name="button" value="<?= $valuesBtn ?>"><?= $nameBtn ?></button></td>
 		</tr>
 	</table>
 	</form>
 </div>
 <br>


















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
  