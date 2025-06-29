<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 20px;
        }

        .content-box {
            display: flex;
            gap: 30px;
            padding: 30px;
            background: #f4f6f9;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 1000px;
        }

        .foto {
            flex: 1;
            text-align: center;
        }

        .foto img {
            width: 200px;
            height: 250px;
            object-fit: cover;
            border: 3px solid #007bff;
            border-radius: 10px;
            padding: 5px;
            background-color: white;
        }

        .biodata {
            flex: 2;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            padding: 25px;
            border-radius: 15px;
        }

        .biodata h1 {
            margin-bottom: 20px;
            border-bottom: 2px solid #fff;
            padding-bottom: 10px;
            font-size: 28px;
            text-align: center;
        }

        .biodata .data-item {
            display: grid;
            grid-template-columns: 150px 1fr;
            margin: 10px 0;
            font-size: 18px;
        }

        .biodata .data-item span {
            display: block;
        }
    </style>
</head>
<body>

<div class="content-box">
    <div class="foto">
        <h3>Foto</h3>
        <img src="profilgunung.jpg" alt="Foto saya">
    </div>
    <div class="biodata">
        <h1> Biodata Saya </h1>

        <div class="data-item">
            <span><strong>Nama</strong></span> 
            <span>Nailus Sandi Zakaria</span>
        </div>

        <div class="data-item">
            <span><strong>NPM</strong></span> 
            <span>202243500792</span>
        </div>

        <div class="data-item">
            <span><strong>Kelas</strong></span> 
            <span>S6F</span>
        </div>

        <div class="data-item">
            <span><strong>TTL</strong></span> 
            <span>Pati, 20 Juli 2003</span>
        </div>

        <div class="data-item">
            <span><strong>Alamat</strong></span> 
            <span>Jl. Siung, Setu, Cipayung, Jakarta Timur</span>
        </div>

        <div class="data-item">
            <span><strong>Pekerjaan</strong></span> 
            <span>Furniture</span>
        </div>

        <div class="data-item">
            <span><strong>Email</strong></span> 
            <span>Nailussandiz27@gmail.com</span>
        </div>

        <div class="data-item">
            <span><strong>Hobi</strong></span> 
            <span>Nonton film, Main game , Mendaki</span>
        </div>

    </div>
</div>

</body>
</html>
