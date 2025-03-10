<?php
  include '../portofolio/config.php';

  if (isset($_POST['send'])) {
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $send_massage = $_POST['pesan'];

    $sql = "INSERT INTO contact (name, email, pesan) VALUES ('$username', '$email', '$send_massage')";

    if ($db->query($sql)) {
      echo "<script>alert('Massage Sent!!');
      window.location.href = '#home';</script>";
    } else {
      echo "<script>alert('Massage Sent!!');
      window.location.href = '#contact';</script>";
    }
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>website AZZAM</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  
  <!-- icon -->
  <link rel="icon" type="image/png" href="">

  <!-- AOS animate on scrol -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- My Style -->
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- Navbar start -->
  <nav class="navbar">
    <a><img src=""> Portofolio's AZZAM
    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang saya</a>
      <a href="#works">galery</a>
      <a href="#skil-bars">Skils</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="https://www.instagram.com/zaammbroett__?igsh=ZHFnYTVnc3YybTVu" target="_blank" ><i data-feather="instagram"></i></a>
      <a href="https://wa.me/+6282324641814 " target="_blank"><i data-feather="phone"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
    


  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home" >
      <main class="content">
        <h3>Hallo, my name is<span> HARITS AZZAM</span></h3>
        <div class="static-txt">I'm a</div>
        <ul class="dynamic-txts">
            <li><span>front end</span></li>
            <li><span>back end</span></li>
        </ul>
        <h1>
          <a>feel free to learn </a>
        </h1>
        
      </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="500">
    <h2><span>Tentang</span> Saya</h2>

    <div class="row">
      <div class="about-img">
        <img src="gambar/Gambar WhatsApp 2025-03-07 pukul 10.15.37_3451460c.jpg" alt="Tentang Saya">
      </div>
      <div class="content">
        <h3>Hi Perkenalkan nama saya Harits Azzam N.T.</h3>
        <p>Saya Adalah seorang Web developer saya sangat suka pemrograman terutama bahasa PHP</p>
        <p>saya sangat antusias untuk belajar pemrograman .</p>
      </div>
    </div>

    <div class="about-experience">

      <div class="row-heading-block" data-aos="fade-up">
          <div class="column">
              <h2><span> Work & </span>Education</h2>
          </div>
      </div>

      <div class="row about-experience__timeline">

          <div class="column" data-aos="fade-up">
              <div class="timeline">

                  <div class="timeline__icon-wrap">
                      <i data-feather="briefcase"></i>
                  </div>

                  <div class="timeline__block">
                      <div class="timeline__header">
                          <p class="timeline__timeframe">not on work yet</p>
                          <h3 class="item-title">comming soon</h3>
                          <h5></h5>
                      </div>
                      <div class="timeline__desc">
                          <p>open to remote work contack me <a href="" target="_blank">here</a></p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="column large-half tab-full" data-aos="fade-up">
              <div class="timeline" >

                  <div class="timeline__icon-wrap">
                    <i data-feather="book-open"></i>
                  </div>

                  <div class="timeline__block">
                      <div class="timeline__bullet"></div>
                      <div class="timeline__header">
                          <p class="timeline__timeframe">2015 - 2021</p>
                          <h3 class="item-title">SD SINAR MENTARI</h3>
                          <h5>TINGKAT SD</h5>
                      </div>
                      <div class="timeline__desc">
                          <p>Saya pertama kali bersekolah dan menemukan teman teman yang hebat</p>
                      </div>
                  </div>

                  <div class="timeline__block">
                      <div class="timeline__bullet"></div>
                      <div class="timeline__header">
                          <p class="timeline__timeframe">2021 - 2024</p>
                          <h3 class="item-title">MTS DARUSSUNNAH</h3>
                          <h5>Tingkat SMP</h5>
                      </div>
                      <div class="timeline__desc">
                          <p>Disekolah inilah saya dapat memilah-milih kemana saya akan melanjutkan karena kegiatan nya cukup luang olehkarena itu saya melihat peluang di pemrograman walaupun sedikit telat</p>
                      </div>
                  </div>

                  <div class="timeline__block">
                      <div class="timeline__bullet"></div>
                      <div class="timeline__header">
                          <p class="timeline__timeframe">July 2024 - NOW</p>
                          <h3 class="item-title">SMK TELKOM PURWOKERTO</h3>
                          <h5>tingkat SMK</h5>
                      </div>
                      <div class="timeline__desc">
                          <p>Disekolah inilah saya Meneruskan keinginan saya untuk mempelajari pemrograman.Dan saya akan meneruskan sampai saya sukses.</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>

  </div> <!-- end about-experience -->

  </section>
  <!-- About Section end -->


  <!-- Products Section start -->
  <!-- works
    ================================================== -->
    <section id="works" class="s-works">

      <div class="row_portofolio" data-aos="fade-up">
          <div class="column">
              <h2 > <span>gallery</span> Saya</h2>
              <p >
                  Ini adalah beberapa projrct yang telah saya selesaikah dalam 1 tahun kebelakang.
                   Feel free to improve,
                   check them out.
              </p>
          </div>
      </div> <!-- end heading-block -->

      <div class="masonry-wrap">

          <div class="masonry">
              <div class="grid-sizer"></div>
  
              <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">
                    <div class="item-folio__thumb">
                        <a href="#" class="item-detail-button" data-img="" data-caption="ini adalah website pertama saya yang sudah diupload di internet walaupun masih enggunakan">
                            <img src="gambar/Gambar WhatsApp 2025-03-07 pukul 10.15.37_b68f776f.jpg" alt="">
                        </a>
                    </div>
                    <div class="item-folio__text">
                        <h4 class="item-folio__title">project</h4>
                        <p class="item-folio__cat">Portofolio menggunakan tamplate</p>
                    </div>
                    <div class="item-folio__caption">
                        <p>ini adalah website pertama saya yang sudah diupload di internet walaupun masih menggunakan tamplate</p>
                    </div>
                </div>
            </div>
          </div> <!-- end masonry -->

      </div> <!-- end masonry-wrap -->

  </section> <!-- end s-work -->
  <!-- Products Section end -->

  <!-- skils start -->
<div id="skil-bars"  class="skilbar" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300">
  <h2><span>Skils</span> Bars</h2>
  <p>Berikut adalah skil yang saya pahami didalam bentuk chart</p>
     
  <ul  class="skill-bars">
      <li>
      <div class="progress" style="width: 75%;"><span>75%</span></div>
      <strong>HTML5</strong>
      </li>
      <li>
      <div class="progress" style="width: 75%;"><span>75%</span></div>
      <strong>CSS3</strong>
      </li>
      <li>
      <div class="progress" style="width: 35%;"><span>35%</span></div>
      <strong>Laravel</strong>
      </li>
      <li>
      <div class="progress" style="width: 10%;"><span>10%</span></div>
      <strong>PHP</strong>
      </li>
      <li>
      <div class="progress" style="width: 35%;"><span>35%</span></div>
      <strong>Bootstrap</strong>
      </li>
      <li>
      <div class="progress" style="width: 20%;"><span>20%</span></div>
      <strong>JS</strong>
      </li>
  </ul>
</div> 
  <!-- skils end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kirimkan </span>pesan</h2>
    <p>Kami akan selalu membaca pesan anda .feel free to improve.
    </p>

    <div class="row">
      

      <form action="#contact">
        <div class="input-group">
          <i data-feather="user"></i>
          <input name='name 'id="name" type="text" placeholder="masukan nama anda..." required>
          <span id="name-error" class="error"></span>
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input name='email'id="email" type="text" placeholder="masukan alamat email ..."required>
          <span id="email-error" class="error"></span>
        </div>
        <div class="input-group">
          <i data-feather="message-square"></i>
          <input name='pesan'class="chat" id="password" type="text" placeholder="masukan pesan" required>
          <span id="password-error" class="error" aria-live="polite"></span>
        </div>
        <button type="submit" id="btn" class="btn" onsubmit="return validateForm()" onclick="validateForm()">kirim pesan</button>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/zaammbroett__?igsh=ZHFnYTVnc3YybTVu" target="_blank"><i data-feather="instagram"></i></a>
      <a href="https://wa.me/+6282324641814 " target="_blank"><i data-feather="phone"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang saya</a>
      <a href="#works">galery</a>
      <a href="#skil-bars">Skils</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Harits Azzam</a>. | &copy; 2025.</p>
    </div>

    <button onclick="topFunction()"  id="myBtn" title="Go to top" data-aos="fade-zoom-in"
    data-aos-easing="ease-in-back"
    data-aos-delay="300"
    data-aos-offset="300">Top</button>
  </footer>
  <!-- Footer end -->


  <!-- Modal Box Item Detail start -->
  <div class="modal" id="project-modal">
    <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img id="modal-image" src="" alt="">
            <p id="modal-caption"></p>
        </div>
    </div>
</div>
  <!-- Modal Box Item Detail end -->

  


  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- AOS animate on scrol -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- My Javascript -->
  <script src="script.js"></script>
  ></script>

</body>

</html>
