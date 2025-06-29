<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak - Febrian</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #ffffff); /* Warna latar belakang yang lebih menarik */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Menggunakan min-height agar tidak terpotong pada konten lebih */
            text-align: center;
            color: #333;
        }
        .contact-card {
            max-width: 550px; /* Ukuran kartu yang sedikit lebih besar */
            background: rgba(255, 255, 255, 0.95); /* Sedikit transparan */
            padding: 40px;
            border-radius: 15px; /* Sudut lebih membulat */
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); /* Bayangan lebih dramatis */
            backdrop-filter: blur(5px); /* Efek blur pada latar belakang kartu */
            animation: fadeIn 1s ease-out; /* Animasi masuk */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 32px; /* Ukuran font lebih besar */
            color: #1d3557; /* Warna judul lebih gelap */
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        h1::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: #e63946; /* Garis bawah yang menarik */
            border-radius: 2px;
        }

        p {
            font-size: 17px; /* Ukuran font paragraf sedikit lebih kecil */
            margin: 12px 0;
            color: #457b9d; /* Warna teks paragraf */
            line-height: 1.6;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            gap: 10px;
        }

        .contact-item img {
            width: 25px; /* Ukuran ikon kontak */
            height: 25px;
            filter: grayscale(80%) brightness(120%); /* Sedikit efek pada ikon */
        }

        .social {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px; /* Jarak antar ikon sosial lebih besar */
        }
        .social a {
            text-decoration: none;
            color: #1d3557; /* Warna teks sosial */
            display: flex;
            align-items: center;
            font-weight: 600; /* Ketebalan font */
            font-size: 17px;
            transition: color 0.3s ease, transform 0.3s ease; /* Transisi lebih halus */
            background-color: #f1faee; /* Latar belakang untuk setiap link sosial */
            padding: 10px 18px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .social a:hover {
            color: #e63946; /* Warna hover yang kontras */
            transform: translateY(-3px); /* Efek mengangkat saat hover */
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .social img {
            width: 32px; /* Ukuran ikon sosial lebih besar */
            height: 32px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <h1>Hubungi Saya</h1>
        <p>Saya sangat senang terhubung dengan Anda! Jangan ragu untuk menghubungi saya melalui informasi di bawah ini.</p>
        
        <div class="contact-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" alt="Email Icon">
            <p>Email: <a href="mailto:febrianriski222@gmail.com" style="color: #457b9d; text-decoration: none;">febrianriski222@gmail.com</a></p>
        </div>
        <div class="contact-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Phone Icon">
            <p>Telepon: <a href="tel:+62895331165560" style="color: #457b9d; text-decoration: none;">+62895331165560</a></p>
        </div>
        <div class="contact-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Location_dot_yellow.svg" alt="Location Icon">
            <p>Alamat: Bekasi, Jawa Barat, Indonesia</p>
        </div>

        <div class="social">
            <a href="https://www.instagram.com/febriannrs1?igsh=ZW4yMWhkd2gzc3Ro" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">Instagram
            </a>
            <a href="https://github.com/FEBRIAN80" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/GitHub_Invertocat_Logo.svg/1200px-GitHub_Invertocat_Logo.svg.png" alt="GitHub">GitHub
            </a>
            <a href="https://www.linkedin.com/in/febrian-nurs-203254247/" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/480px-LinkedIn_logo_initials.png" alt="LinkedIn">LinkedIn
            </a>
        </div>
    </div>
</body>
</html>