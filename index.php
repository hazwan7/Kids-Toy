<!DOCTYPE html>
<html>
<head>
	<title>KIDS TOYS</title>
</head>
<body>
	<script
src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-33139e5a-1090-40c9-82c5-fa8aed222df6"></div>
	<center>
		<!--Tiada huruf G-->
		<h2>SENARAI BARANG MAINAN</h2>
<body style = "background-color:#D77EF0;">
   
		
		<table border="1" cellspacing="0" cellpadding="6">
		  <tr bgcolor="#eee">	

			<th>KOD PRODUK</th>
			<th>NAMA PRODUK</th>
        		<th>HARGA</th>
        		<th>KUANTITI</th>

<td>Hapus</td><!-- Isi tag <td> dengan Hapus-->
			
		  </tr>

		  <?php   //fail config1.php tidak ada dalam folder
		  	include 'config.php';

		  	$papar=mysqli_query($connect,"SELECT * FROM jadualmainan");

		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['kod_produk']."</td>
			<td>".$row['nama_produk']."</td>
        		<td>".$row['harga']."</td>
        		<td>".$row['kuantiti']."</td>
<td><a href='delete.php?kod_produk=".$row['kod_produk']."' onclick='myHapus()'> Hapus </a></td>
		  </tr>";
		}
		  ?>
		</table>   <!--Tukar tambah.php ke add.php-->
<p><a href="add.php">Tambah Rekod</a></p>
<p><a href="kemaskini.php">Kemaskini</a></p>
		
	</center>

	
</body>
</html>


