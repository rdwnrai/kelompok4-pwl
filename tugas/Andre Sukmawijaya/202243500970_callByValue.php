<html>
	<head>
		<title>Tugas 2-3 PWL</title>
        <link rel="stylesheet" href="file_CSS.css">
	</head>
	<body>
		
		<?php include '202243500970_Header.php'; ?>
		
		<table>
			<tr>
				<td class="sidebar">
				
				<?php include '202243500970_List.php'; ?>
				
				<td class="content">
				
				<?php
					function jumlahkan($x,$y) {
						$hasil = $x + $y;
						return $hasil;
					}
	
					echo "Hasilnya = ".jumlahkan(10,2)."<br/>";
					$bil = 0;
					$bil = jumlahkan(9,9);
					echo "Hasilnya = ".$bil;
				?>
			
				</td>
			</tr>
		</table>
		
		<?php include '202243500970_Footer.php'; ?>
		
	</body>
</html>