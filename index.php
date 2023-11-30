

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagaPadi.id</title>
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="icon/logo.png" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <!-- kontak -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="script.js" defer></script>
</head>
<body>
<!-- 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 -->
<!-- bagian navbar -->
<!-- navbar -->



<nav>
  <div class="logo">
    <img src="icon/logo.png" width="60px" alt="" />
    <h3><span style="color: #048853">Jaga</span>Padi.id</h3>
  </div>

  <ul class="list">
    <li><a href="#beranda">Beranda</a></li>
    <li><a href="#layanan">Layanan</a></li>
    <li><a href="#artikel">Artikel</a></li>
    <li><a href="#kontak">Kontak</a></li>
    <li><a href="informasi.php">Informasi</a></li>
  </ul>

  <!-- icon hamburger-menu -->
  <div class="hamburger-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>

<!-- bagian Hero Section -->
<section class="hero" id="beranda">
    <h1>Sistem Informasi<br> Pengendalian Lumbung Padi</h1>
    <div class="conta">
        <div class="row">
            <a href="data.html" class="cta-1">Lihat Semua Data</a>
        </div>
    </div>
    <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">PRODUKSI PADI</div>
              <div class="number">53 6325 539,51 ton</div>
              <div class="indicator">
                <i class='bx bx-down-arrow-alt down'></i>
                <span class="text">Produksi padi tahun 2023</span>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">KONSUMSI PADI</div>
              <div class="number">31 310 000,00 ton</div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Konsumsi padi tahun 2023</span>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">GAGAL PANEN</div>
              <div class="number">4 596 500,38 ton</div>
              <div class="indicator">
                <i class='bx bx-down-arrow-alt down'></i>
                <span class="text">Gagal panen tahun 2023</span>
              </div>
            </div>
          </div>
</div>     
</section>

<section>
<div class="informasi" id="">
<?php
if (isset($_POST["submit"]))
{
$menu= $_POST['menu'];
$wilayah= $_POST['wilayah'];
$deskripsi= $_POST['deskripsi'];
$tanggung= $_POST['tanggung'];
$nohp= $_POST['nohp'];

echo"
<pre>

    Jenis Informasi              : $menu
    Wilayah                           : $wilayah
    Deskripsi                         :$deskripsi
    Penanggung Jawab    : $tanggung
    No Handphone              : $nohp

";
}
?>
</div>
</section>

<!-- Layanan Kami -->
<section>
<div class="container" id="layanan">

    <div class="heading">
        <h1>Layanan Kami</h1>
        <p>Kami memberikan layanan kepada masyarakat melalui OpenAI yang akan membantu mengatasi masalah pertaniaan dan kami dapat berkerjasama untuk sosialisasi. pilih salah satu katagori</p>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="icon/seeding.png" alt="">
            <h3>Edukasi Mengenai Penanaman Benih Padi</h3>
            
        </div>

        <div class="box">
            <img src="icon/shovel.png" alt="">
            <h3>Edukasi Mengatasi Masalah Hama Pada Padi</h3>
            
        </div>

        <div class="box">
            <img src="icon/sprout.png" alt="">
            <h3>Edukasi mengenai kegagalan panen padi</h3>
            
        </div>

        <div class="box">
            <img src="icon/fertilizer.png" alt="">
            <h3>Edukasi mengenai pemupukan padi</h3>
            
        </div>


    </div>

</div>
</section>
<!-- Artikel -->
<section>
  <div class="container-02" id="artikel">
    <div class="heading-02">
        <h1>Artikel Terbaru</h1>
        
    </div>

  <div class="post-filter container">
      
      <span class="filter-item" data-filter="padi">Jenis Padi</span>
      <span class="filter-item" data-filter="beras">Jenis Beras</span>
  </div>
  
  <div class="post container">
      <!-- BERAS -->
      <div class="post-box beras">
          <img src="img/rojolele.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Rojolele</a>
          
          <p class="post-description">Rojolele atau yang dikenal sebagai munjul masuk ke dalam jenis beras yang ada di Indonesia dan termasuk jenis beras premium yang dibudidayakan, lo.
            Beras ini dibudidayakan di Pulau Jawa. Tekstur beras ini setelah dimasak akan menjadi nasi yang sangat pulen. Meski begitu, untuk aromanya tidak terlalu wangi.
            </p>
          <div class="profile">
            <a href="rojolele.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box beras">
          <img src="img/pandan.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Pandan Wangi</a>
          
          <p class="post-description">Pandan wangi masuk ke dalam kategori jenis-jenis beras yang ada di Indonesia dan termasuk pulen setelah dimasak.
            Varietas beras ini asli berasa dari Cianjur, Jawa Barat, dan memiliki aroma wangi seperti daun pandan usai matang menjadi nasi.
            Aroma yang khas dari beras premium ini termasuk cukup banyak disukai karena dianggap dapat menggugah selera makan seseorang. </p>
          <div class="profile">
            <a href="pandan-wangi.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box beras">
          <img src="img/pera.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Pera</a>
          
          <p class="post-description">IR 42 tergolong jenis beras yang ada di Indonesia yang bakal Mamikos bahas kali ini. Beras ini juga sering mendapat istilah sebagai beras pera sebab ketika dimasak teksturnya akan lebih kering dan sedikit keras atau kurang pulen.
            Makanya tak heran jika beras jenis ini ebih cocok untuk diolah atau dijadikan sebagai makanan tertentu.</p>
          <div class="profile">
            <a href="pera.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box beras">
          <img src="img/merah.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Merah</a>
          
          <p class="post-description">Beras merah atau yang juga dikenal sebagai brown rice menjadi jenis beras yang ada di Indonesia yang akan Mamikos bahas selanjutnya.
            Jenis beras satu ini sering dijadikan sebagai menu sehat atau nasi diet sebab beras ini memang memiliki kandungan serat dan protein yang jauh lebih tinggi dibandingkan nasi biasa.
            </p>
          <div class="profile">
            <a href="merah.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box beras">
          <img src="img/ketan.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Ketan</a>
          
          <p class="post-description">Beras ketan mempunyai ciri khas yang sangat kentara yakni berwarna putih pekat dan tidak transparan dibandingkan dengan varietas beras lain. Beras ketan juga memiliki bentuk butiran yang agak lonjong.
            Apabila kamu memasak beras ketan, maka kamu akan mendapat tekstur yang jauh lebih lengket dan padat, namun ada sedikit rasa gurih yang akan kamu rasakan ketika memakannya.
            </p>
          <div class="profile">
            <a href="ketan.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box beras">
          <img src="img/mentik-wangi.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Beras</h2>
          <a href="#" class="post-title">Beras Mentik Wangi</a>
          
          <p class="post-description">Jenis beras yang ada di Indonesia dan mendapat grade premium serta dibudidayakan secara organik adalah beras mentik wangi. Varietas beras mentik wangi ini sering dijumpai dan cukp populer.
            Hasil beras ini ketika jadi nasi memiliki aroma yang harum ketika dimasak, tetapi warnanya tidak terlalu putih atau terlihat sedikit kusam kekuningan. Beras mentik wangi memiliki bentuk yang cenderung bulat lonjong dan sedikit pendek.
            </p>
          <div class="profile">
            <a href="mentik.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      


      <!-- PADI-->
      <div class="post-box padi">
          <img src="img/padi-ketan.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Ketan</a>
          
          <p class="post-description">Padi ketan lebih lengket dari padi nasi, sehingga tidak dijadikan makanan pokok. Padi ketan biasanya dijadikan bahan pembuatan tape ketan, bubur ketan, dan macam-macam makanan khas daerah.
            Varian padi ketan antara lain adalah varian padi ketan merah, putih, dan hitam
            </p>
          <div class="profile">
            <a href="padi-ketan.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box padi">
          <img src="img/padi-gogo.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Gogo</a>
          
          <p class="post-description">Padi gogo adalah jenis padi yang tidak ditanam di sawah seperti pada umumnya. Jenis padi ini ditanam di kebun atau di ladang. Kelebihan padi gogo adalah tidak memerlukan irigasi khusus. Daerah yang sering mengembangkan padi gogo adalah daerah tadah hujan, contohnya di Lombok.</p>
          <div class="profile">
            <a href="padi-gogo.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box padi">
          <img src="img/padi-organik.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Organik</a>
          
          <p class="post-description">Padi organik adalah Jenis-Jenis Padi yang ditanam tanpa bahan kimia sintetis atau pestisida. Dalam era kesadaran akan makanan organik, padi organik semakin diminati karena dianggap lebih sehat dan ramah lingkungan. Padi organik menghasilkan beras dengan kualitas gizi yang lebih baik.</p>
          <div class="profile">
            <a href="padi-organik.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box padi">
          <img src="img/padi-ladang.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Ladang</a>
          
          <p class="post-description">Padi ladang adalah padi yang tumbuh liar di lahan-lahan kering dan sering dianggap sebagai “padi liar”. Dengan tinggi yang beragam, padi ladang tumbuh di lahan yang kurang subur dan memerlukan perawatan minimal. Beberapa Jenis-Jenis Padi  ladang adalah padi ketan hitam dan padi merah. Padi ketan hitam sering digunakan dalam hidangan manis seperti bubur ketan, sedangkan padi merah dikenal akan kandungan serat dan zat besinya.</p>
          <div class="profile">
            <a href="padi-ladang.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box padi">
          <img src="img/padi-pulen.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Pulen</a>
          
          <p class="post-description">Padi pulen adalah padi yang apabila berasnya dimasak, akan menghasilkan karakteristik nasi yang pulen. Sebagian orang lebih menyukai nasi yang pulen alias sedikit lengket.
            Pulen berasal dari amilopektin yang tinggi di dalam padi dan kadar amilosa di bawah 25%. Apabila dimasak, nasi yang dihasilkan akan berasa sedikit lengket.
            </p>
          <div class="profile">
            <a href="padi-pulen.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      <div class="post-box padi">
          <img src="img/padihitam.jpg" alt="" class="post-img">
          <h2 class="category">Jenis Padi</h2>
          <a href="#" class="post-title">Padi Hitam</a>
          
          <p class="post-description">Padi hitam dikenal dengan warna butirnya yang hitam pekat. Kandungan nutrisinya sangat tinggi, terutama zat besi dan serat. Karena kekayaan gizi dan cita rasanya yang unik, padi hitam semakin populer dalam berbagai hidangan sehat dan makanan penambah energi.</p>
          <div class="profile">
            <a href="padi-hitam.html" class="btn">Selengkapnya</a>
          </div>
      </div>
      </div>
  </div>
  </section>

  <!-- kontak Pesan -->

  <button class="chatbot-toggler">
    <span class="material-symbols-rounded">mode_comment</span>
    <span class="material-symbols-outlined">close</span>
  </button>
  <div class="chatbot">
    <header>
      <h2>ChatAI</h2>
      <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
      <li class="chat incoming">
        <span class="material-symbols-outlined">smart_toy</span>
        <p>Hi Sobat JagaPadi.id 👋<br>Ada yang bisa kami bantu?</p>
      </li>
    </ul>
    <div class="chat-input">
      <textarea placeholder="Tulis Pesan..." required></textarea>
      <span class="material-symbols-rounded">send</span>
    </div>
  </div>


























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
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="main.js"></script>

</body>
</html>

