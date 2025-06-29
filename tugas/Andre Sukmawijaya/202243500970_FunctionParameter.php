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
					//membuat fungsi dengan parameter
					function perkenalan($nama, $salam) {
						echo $salam.", <br/>";
						echo "Salam kenal, nama saya ".$nama."<br/>";
						echo "Senang bertemu denganmu<br/>";
					}

					//memanggil fungsi
					perkenalan("Andre", "Assalamualaikum");
				?>
				
				</td>
			</tr>
		</table>
		
		<?php include '202243500970_Footer.php'; ?>
		
	</body>
</html>