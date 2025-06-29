<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2-3 PWL</title>
    <link rel="stylesheet" href="file_CSS.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background: #fefefe;
            color: #1900b8;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #040404;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            border: 3px solid #1900b8;
        }

        h2 {
            color: #1900a8;
            padding-bottom: 10px;
            border-bottom: 2px solid #1900b8;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 20px;
        }

        .folder-list {
            text-align: left;
            background: #040404;
            padding: 15px;
            border-radius: 8px;
            width: 35%;
            box-shadow: 0px 3px 10px rgba(7, 5, 6, 0.2);
            border: 2px solid #1900b8;
        }

        .folder-list h3 {
            color: #1900b8;
            margin-bottom: 10px;
        }

        .folder-list ul {
            list-style: none;
            padding: 0;
        }

        .folder-list li {
            padding: 5px;
            font-size: 16px;
            color: #1900b8;
            transition: 0.3s;
        }

        .folder-list li:hover {
            color: #1900b8;
            transform: translateX(5px);
        }

        .screenshot {
            width: 60%;
        }

        .screenshot img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(4, 2, 3, 0.3);
            border: 3px solid #1900b8;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #1900b8;
        }
    </style>
</head>
<body>

    <!-- header -->
<div class="header">
		{202243500970 - Andre Sukmawijaya}
	</div>

	<!-- tabel utama -->
	<table>
		<tr>
			<td class="sidebar">
				
				<?php include '202243500970_List.php'; ?>
				
			<td class="content">
            <?php 
                    $bil1 = 100;
                    $bil2 = 20;
                    $teks1 = "PHP";
                    $teks2 = "PHP";
        
                    printf("%d == %d hasilnya %d<br/>",$bil1, $bil2, $bil1 == $bil2);
                    //100 == 20 hasilnya 0
                    printf("%d != %d hasilnya %d<br/>",$bil1, $bil2, $bil1 != $bil2);
                    //100 != 20 hasilnya 1
                    printf("%d >= %d hasilnya %d<br/>",$bil1, $bil2, $bil1 >= $bil2);
                    //100 >= 20 hasilnya 1
                    printf("%s == %s hasilnya %d<br/>",$teks1, $teks2, $teks1 == $teks2);
                    //PHP == php hasilnya 0
                    printf("%s != %s hasilnya %d<br/>",$teks1, $teks2, $teks1 != $teks2);
                    //PHP != php hasilnya 1
                ?>
            </div>
        <div class="footer">
            <p><strong>Tugas 4 PWL By : Andre Sukmawijaya</strong></p>
        </div>
    </div>

</body>
</html>