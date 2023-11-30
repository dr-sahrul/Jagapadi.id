<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pengendalian Lumbung Padi </title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="icon/logo.png"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- kontak -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type=text/javascript>
    altert ("Informasi yang diberikan valid/benar");
    </script>

</head>
<body>

<nav>
  <div class="logo">
    <img src="icon/logo.png" width="60px" alt="" />
    <h3><span style="color: #048853">Jaga</span>Padi.id</h3>
  </div>

  <ul class="list">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php">Layanan</a></li>
    <li><a href="index.php">Artikel</a></li>
    <li><a href="index.php">Kontak</a></li>
    <li><a href="informasi.php">Informasi</a></li>
  </ul>

  <!-- icon hamburger-menu -->
  <div class="hamburger-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>

<section>
<div class="container-03" id="layanan">

  <h1> Masukkan Informasi</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <table border="1" cellspaing="0" cellpadding="5">
        <tr>
          <td>Menu</td>
          <td>
            <select name="menu">
            <option value="">------piih jenis informasi-----</option>
            <option value="Panen">Panen Padi</option>
            <option value="Wabah">Wabah</option>
            <option value="Gagal Panen">Gagal Panen</option>
          </td>
        </tr>

        <tr>
          <td> Wilayah</td>
          <td>
          <select name="wilayah">
            <option value="">------piih wilayah anda------</option>
            <option value="Indramayu">Indramayu</option>
            <option value="Karawang">Karawang</option>
            <option value="Subang">Subang</option>
            <option value="Cianjur">Cianjur</option>
            <option value="Bekasi">Bekasi</option>
            <option value="Grobongan">Grobongan</option>
            <option value="Cilacap">Cilacap</option>
            <option value="Sragen">Sragen</option>
            <option value="Ngawi">Ngawi</option>
            <option value="Lamongan">Lamongan</option>
            <option value="Bojonegoro">Bojonegoro</option>
            <option value="Jember">Jember</option>
            <option value="Banyuwangi">Banyuwangi</option>
            <option value="Tuban">Tuban</option>
            <option value="Madiun">Madiun</option>
            <option value="Nganjuk">Nganjuk</option>
            <option value="Ponorogo">Ponorogo</option>
            <option value="Gresik">Gresik</option>
          </td>
        </tr>

        <tr>
          <td> Deskripsi</td>
          <td>
            
            <textarea rows="5" cols="30" name="deskripsi" placeholder="deskripsi" required>  </textarea>
          </td>
        </tr>

        <tr>
          <td> Penanggung Jawab</td>
          <td>
            <input type="text" name="tanggung" placeholder="penanggung jawab info" required>
          </td>
        </tr>
        <tr>
          <td> No HandPhone</td>
          <td>
            <input type="number" name="nohp" placeholder="no HP" required>
          </td>
        </tr>
      </table>
      <br>
      <div class="from-group" >
              <button type="submit" name="submit" onclick="index.html">Kirim </button>
            </div>
</div>
            
</section>


  <!-- kontak Pesan -->




























  <footer>
      <div class="footer-container" id="kontak">
          <div class="sec aboutus">
              <h2>Tentang Kami</h2>
              <p>Sistem Informasi Pengendalian Lumbung Padi ini untuk memberikan informasi kepada masyarakat dan pemerintah akan pengendalian lumbung padi di daerah-daerah serta masyarakat dapat menggunakan OpenAI untuk mengatasi masalah pertanian padi melalui ChatGPT.</p>

            
          </div>
          <div class="sec contactBx">
            <h2>Hubungi Kami</h2>
            <ul class="info">
              <li>
                <span><i class='bx bxs-map'></i></span>
                <span>Jl. Kamal Raya No.18, RT.6/RW.3, Cengkareng Tim., Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730</span>
              </li>
              <li>
                <span><i class='bx bx-envelope' ></i></span>
                <p><a>bsirevolution01@gmail.com</a></p>
              </li>
            </ul>
            <ul class="sci">
              <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
              <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
              <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
            </ul>
          </div>
          <div class="contact-form">
            <h2>Kontak Pesan</h2>
            <div class="from-group">
                <label for="">Nama Anda</label>
                <input type="text" id="name" placeholder="">
            </div>
            <div class="from-group">
                <label for="">Alamat Email Anda</label>
                <input type="text" id="email" placeholder="">
            </div>
            <div class="from-group">
                <label for="">Subjek</label>
                <input type="text" id="subject" placeholder="">
            </div>
            <div class="from-group">
                <label for="">Pesan Anda</label>
                <textarea id="message" placeholder=""></textarea>
            </div>
            <div class="from-group">
                <button onclick="sendMessage();">Kirim Pesan</button>
            </div>
        </div>
      </div>
  </footer>
  



  <!-- scrip emailjs -->
  <script>
    function sendMessage(){
        (function(){
            emailjs.init("PGQKxNGTKo6akT78M");
        })();

        var serviceID = "service_djgcuv6";
        var templateID = "template_by10afm";

        var params = {
            sendername: document.querySelector("#name").value,
            senderemail: document.querySelector("#email").value,
            subject: document.querySelector("#subject").value,
            message: document.querySelector("#message").value
        };

        emailjs.send(serviceID, templateID, params)
        .then( res => {
            alert('Thank You, ' + params['sendername'] + '! Your message has been sent.');
        })
        .catch();


    }
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="main.js"></script>

</body>
</html>