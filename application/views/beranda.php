<html>
<head>
<title>Beranda</title>
<link rel="stylesheet" type="text/css" href="<?=base_url ()?>asset/stylee.css">
</head>
<body class="ik" style="background: linear-gradient(135deg, #325adf 0#, #e7350f 100#);">
    <header class="ob">
    <div class="atas">
    <div id="logo"><img style="width: 127px;margin-left: 40px;float: left;"src="<?=base_url()?>asset/ameri.png" alt=""></div>
    <nav>
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
            </ul>
            </nav>
        </div>
    </header>
    <h1 align="center" style="color:skyblue;text-align:left;font-size: 10.3mm; margin-top: 25px; margin-left: 12px; font-family: sans-serif; margin-left: 56px;">Selamat Datang <?= $nama_lengkap?> <br>Berperilaku seperti <?= $jenis_kelamin?></h1>
    <p style="font-size: 25px; margin-left: 56px; margin-top: 10px; color: black;">Kami telah menyiapkan beberapa produk yang mungkin menarik untuk Anda lihat.</p>
    <img style="widht: 400px; height: 300px;margin-left: 100px;margin-top: 10px;"src="<?= base_url()?>asset/bic.jpg" alt="">
</body>
</html>