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
					//membuat fungsi
					function salam() {
						echo "Assalamualaikum...<br/>";
						echo "Salam kenal, Nama Saya Andre Sukmawijaya<br/>";
						echo "Senang bertemu dengan anda</br/>";
					}
	
					salam();
				?>
				
				</td>
			</tr>
		</table>
		
		<?php include '202243500970_Footer.php'; ?>
		
	</body>
</html>