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
					function nilaiKuadrat(&$nilai) {
						$nilai = $nilai * $nilai;
					}
					
					$bil = 3;
					echo "Nilai = ".$bil."<br/>";
					
					nilaiKuadrat($bil);
					echo "Nilai = ".$bil;
				
				?>
			
				</td>
			</tr>
		</table>
		
		<?php include '202243500970_Footer.php'; ?>
		
	</body>
</html>