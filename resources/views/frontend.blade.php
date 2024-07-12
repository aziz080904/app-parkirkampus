<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Nurul FIkri Parking</title>
  <link rel="icon" href="{{ asset('frontend/assets/images/sttnf.png') }}" type="image/x-icon">
  
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
            <span>
              Parking Nurul Fikri
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a style="margin-right: 50px;" href="{{route('login')}}">
                Login
              </a>
              <a  href="{{route('register')}}">
                Register
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Contact Us</a>
                <a href="{{route('login')}}">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="{{ asset('frontend/assets/images/Desain tanpa judul (10).png') }}" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1 align="center">
                    Parking <br>
                    Nurul <br>
                    Fikri
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1 align="center">
                   Very <br>
                   Good <br>
                   Service
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1 align="center">
                    Full <br>
                    Security<br>
                    Controll
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
  </div>
  </section>
  <!-- end slider section -->
  </div>
  <!-- book section -->
  <section class="book_section">
    <div class="form_container">
      <form action="">
        <div class="form-row">
          <div class="col-lg-8">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Full Name</label>
                <input type="text" class="form-control" placeholder="Muhammad Afif">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Vehicle Type</label>
                <input type="text" class="form-control" placeholder="Motor">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Phone Number</label>
                <input type="text" class="form-control" placeholder="081234567890">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Plate Number</label>
                <input type="text" class="form-control" placeholder="B 321 PME">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="btn-container">
              <button type="submit" class="">
                Register Now
              </button>
            </div>
          </div>
        </div>

      </form>
    </div>
    <div class="img-box">
      <img src="{{ asset('frontend/assets/images/book-car.png') }}" width="280px" height="130px" alt="">
    </div>
  </section>

  <!-- end book section -->

  <!-- Rules -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Parking Rules
        </h2>
        <br>
        <Ul>
          <li>Dosen dan Staf STT-NF</li>
          <p>Dosen dan Staf STT-NF (tenaga kependidikan) adalah individu yang memiliki account
            STT-NF dan berstatus aktif atau tugas belajar, berlaku aturan parkir khusus bagi dosen dan staf STT-NF.
          </p>
          <li>Mahasiswa</li>
          <p>Berlaku aturan parkir khusus bagi mahasiswa STT-NF.</p>
          <li>Umum</li>
          <p>Selain dosen, staf, karyawan mitra/lembaga/unit, dan mahasiswa STT-NF, maka izin parkir akan dikenakan
            biaya parkir umum.</p>
        </Ul>
      </div>
    </div>
  </section>

  <!-- End Rules -->


  <!-- Register -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Parking Registration
        </h2>
        <h5>Tahapan Pendaftaran Parkir untuk Sivitas Akademika STT-NF:</h5>
        <br>
        <Ul>
          <li>Pendaftaran Kendaraan</li>
          <p>1. Login ke halaman parkir.NF.ac.id dengan username dan password.</p>
          <p>2. Cek data pada halaman profil, dan lengkapi profil dengan mengisi nomor HP (email dan unit diambil dari
            sistem kepegawaian untuk staff dan dosen, atau akademik untuk mahasiswa).</p>
          <p>3. Masuk kedalam menu kendaraan, isi data kendaraan yang akan di daftarkan, dan upload gambar STNK yang
            terdaftar.</p>
          <p>4. Operator akan melakukan verifikasi kendaraan Anda, setelah itu anda dapat melanjutkan pendaftaran
            langganan parkir.</p>
          <li>Pembelian Paket Berlangganan</li>
          <p>1. Masuk ke menu langganan, pilih paket yang akan dilanggankan.</p>
          <p>2. Pilih Nomor Polisi kendaraan, lalu klik proses.</p>
          <p>3. Anda akan mendapatkan email berupa tagihan dan nomor virtual account untuk membayar.</p>
          <p>4. Bayar tagihan ke nomor Virtual Account, setelah membayar anda akan mendapat email laporan pembayaran,
            dan dapat mengecek status kendaraan anda telah berlangganan di sistem parkir</p>
        </Ul>
      </div>
    </div>
  </section>

  <!-- End Register -->

  <!-- end car section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">
            <img src="{{ asset('frontend/assets/images/223.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="detail-box">
            <h2>
              About Website
            </h2>
            <p>
              Website parkir Nurul Fikri adalah sebuah platform online yang dirancang untuk membantu pengguna dalam
              mendaftarkan, mengelola, dan memantau layanan parkir di sekitar kampus Nurul Fikri.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!--Table-->

  <div class="container">
    <div class="heading_container">
      <h2>
        Table Berlangganan
      </h2>
      <table>
        <tr>
            <th rowspan="1">Paket Basic</th>
            <th colspan="1">Paket Standard</th>
            <th colspan="1">Paket Premium</th>
        </tr>
        <!-- <tr>
            <th>Kimia</th>
            <th>Fisika</th>
            <th>Biologi</th>
        </tr> -->
        <tr>
            <td>Rp 100.000/bulan</td>
            <td>Rp 200.000/bulan</td>
            <td>Rp 300.000/bulan</td>
        </tr>
        <tr>
            <td>normal security</td>
            <td>Standard Security</td>
            <td>Premium Security</td>
        </tr>
        <!-- <tr>
            <td>Rp 300.000/bulan</td>
            <td>96</td>
            <td>70</td>
        </tr> -->
    </table>
    </div>
  </div>
  <br>
      <!-- best section -->

      <!-- <section class="best_section">
        <div class="container">
          <div class="book_now">
            <div class="detail-box">
              <h2>
                Our Best Cars
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the
              </p>
            </div>
            <div class="btn-box">
              <a href="">
                Book Now
              </a>
            </div>
          </div>
        </div>
      </section> -->

      <!-- end best section -->

      <!-- blog section -->

      <section class="blog_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Our Latest Blog
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the
            </p>
          </div>
        </div>
        <div class="blog_container">
          <div class="layout_padding2-top">
            <div class="carousel-wrap ">
              <div class="owl-carousel">
                <div class="item">
                  <div class="box">
                    <div class="date-box">
                      <h6>
                        04 Nov 2019
                      </h6>
                    </div>
                    <div class="img-box">
                      <img src="{{ asset('frontend/assets/images/Desain tanpa judul (1).png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        Safe Security
                      </h5>
                      <p>
                        Safe Security pada sistem parkir merujuk pada serangkaian langkah dan teknologi yang diimplementasikan untuk memastikan keamanan yang optimal bagi kendaraan dan pengguna di area parkir.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="date-box">
                      <h6>
                        04 Nov 2019
                      </h6>
                    </div>
                    <div class="img-box">
                      <img src="{{ asset('frontend/assets/images/Desain tanpa judul (2).png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        Full control
                      </h5>
                      <p>
                        Full control lewat monitor pada sistem parkir mengacu pada kemampuan untuk mengelola dan memantau semua aspek dari sistem parkir menggunakan antarmuka monitor atau dashboard.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="date-box">
                      <h6>
                        04 Nov 2019
                      </h6>
                    </div>
                    <div class="img-box">
                      <img src="{{ asset('frontend/assets/images/Desain tanpa judul (3).png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        parking slot management
                      </h5>
                      <p>
                        Kemampuan untuk mengelola dan mengalokasikan slot parkir, termasuk pengaturan slot khusus, reservasi, dan pemesanan.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="date-box">
                      <h6>
                        04 Nov 2019
                      </h6>
                    </div>
                    <div class="img-box">
                      <img src="{{ asset('frontend/assets/images/Desain tanpa judul (4).png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        automatic payment
                      </h5>
                      <p>
                        Integrasi dengan sistem pembayaran elektronik untuk memfasilitasi pembayaran parkir yang cepat dan aman, termasuk pembayaran online dan pembayaran dengan kartu.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end blog section -->

      <!-- us section -->

      <section class="us_section">
        <div class="container">
          <div class="heading_container">
            <h2>
              why should choose this service?
            </h2>
          </div>
        </div>
        <div class="us_container layout_padding2">
          <div class="content_box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/u-1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  security assured
                </h5>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/u-2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Very good service.
                </h5>
              </div>
            </div>
            <!-- <div class="box">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/u-3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Safe Car
                </h5>
              </div>
            </div> -->
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/u-4.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Full Controll
                </h5>
              </div>
            </div>
          </div>
          <!-- <div class="btn-box">
            <a href="">
              Read More
            </a>
          </div> -->
        </div>
      </section>

      <!-- end us section -->

      <!-- client section -->

      <section class="client_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              What Is say Customer
            </h2>
          </div>
          <div class="layout_padding2-top">
            <div class="carousel-wrap ">
              <div class="owl-carousel">
                <div class="item">
                  <div class="box">
                    <div class="detail-box">
                      <p>
                        "Layanan parkir di Nurul Fikri benar-benar memuaskan. Sistem pemantauan real-time dan kemudahan reservasi slot membuat parkir menjadi sangat nyaman dan efisien, dan bahkan memantau kendaraan saya, Terima kasih Nurul Fikri!"
                      </p>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/client-1.png') }}" alt="" class="img-1">
                        <img src="{{ asset('frontend/assets/images/client-1-white.png') }}" alt="" class="img-2">
                      </div>
                      <div class="name">
                        <h6>
                          Afif
                        </h6>
                        <p>
                          customer
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="detail-box">
                      <p>
                        "Saya sangat terkesan dengan keamanan yang ditawarkan oleh layanan parkir Nurul Fikri. Dengan adanya kamera CCTV dan kontrol akses yang baik, saya merasa sangat aman meninggalkan kendaraan saya di sini."
                      </p>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/client-2.png') }}" alt="" class="img-1">
                        <img src="{{ asset('frontend/assets/images/client-2-white.png') }}" alt="" class="img-2">
                      </div>
                      <div class="name">
                        <h6>
                          Fathur
                        </h6>
                        <p>
                          customer
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="detail-box">
                      <p>
                        "Nurul Fikri menyediakan layanan parkir yang sangat praktis dengan fitur pembayaran otomatisnya. Saya tidak perlu repot mencari uang tunai setiap kali parkir, semuanya bisa dilakukan dengan cepat dan mudah."
                      </p>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/client-1.png') }}" alt="" class="img-1">
                        <img src="{{ asset('frontend/assets/images/client-1-white.png') }}" alt="" class="img-2">
                      </div>
                      <div class="name">
                        <h6>
                          Aziz
                        </h6>
                        <p>
                          customer
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="detail-box">
                      <p>
                        "Antarmuka monitor yang canggih di layanan parkir Nurul Fikri membuat segalanya menjadi lebih mudah. Saya bisa melihat status parkir, manajemen slot parkir dan melakukan pembayaran online, semua dalam satu platform."
                      </p>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/client-1.png') }}" alt="" class="img-1">
                        <img src="{{ asset('frontend/assets/images/client-1-white.png') }}" alt="" class="img-2">
                      </div>
                      <div class="name">
                        <h6>
                          Ida
                        </h6>
                        <p>
                          customer
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- end client section -->

      <!-- contact section -->

      <section class="contact_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Request A call back
            </h2>
          </div>
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="form_container">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputSubject4" placeholder="Phone">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col">
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="inputMessage" placeholder="Message">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="contact_items">

            <a href="">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/location.png') }}" alt="">
              </div>
              <h6>
                Jalan Lenteng Agung Raya
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/call.png') }}" alt="">
              </div>
              <h6>
                081292923434
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="{{ asset('frontend/assets/images/mail.png') }}" alt="">
              </div>
              <h6>
                ParkingNurulFikri@kampus.ac.id
              </h6>
            </a>

          </div>
          <div class="social_container">
            <div class="social-box">
              <div>
                <a href="">
                  <img src="{{ asset('frontend/assets/images/Desain_tanpa_judul__8_-removebg-preview.png') }}" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{ asset('frontend/assets/images/Desain_tanpa_judul__9_-removebg-preview.png') }}" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{ asset('frontend/assets/images/Desain_tanpa_judul__5_-removebg-preview.png') }}" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end contact section -->

      <!-- map section -->

      <section class="map_section">
        <!-- map section -->
        <div class="map_container">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207721147!2d106.83004867553566!3d-6.352924493636968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1720507085033!5m2!1sid!2sid" width="600" height="300" frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe
              src="https://www.google.com/maps/place/STT+Terpadu+Nurul+Fikri+-+Kampus+B/@-6.3529245,106.8300487,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ec6b07b68ea5:0x17da46bdf9308386!8m2!3d-6.3529245!4d106.8326236!16s%2Fg%2F11b60zrjkb?entry=ttu"
              width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
              allowfullscreen></iframe> -->
          </div>
        </div>
        <!-- end map section -->
      </section>


      <!-- end map section -->

      <!-- footer section -->
      <footer class="container-fluid footer_section">
        <p>
          Copyright &copy; 2020 All Rights Reserved. Design by
          <a href="index.html">Kelompok 1</a>
        </p>
      </footer>
      <!-- footer section -->

      <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
      </script>
      <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>


</body>

</html>