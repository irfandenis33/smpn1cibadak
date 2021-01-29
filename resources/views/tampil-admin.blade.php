<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <style>

      a {
        text-decoration: none;
      }

      #header {
        background: url('../asset/img/awfaw.png') no-repeat;
      }

      #header .container {
        padding-bottom: 120px;
      }

      #sambutan .col-lg-2 {
        border-bottom: 5px solid;
        padding-left: 50px;
        padding-right: 50px;
      }

      #berita {
        background-color: rgb(226, 226, 226);
      }

      #berita .col-lg-3 img{
        width: 230px;
        margin-bottom: 10px;
      }

      #profil h3 {
        border-bottom: 5px solid rgb(206, 205, 205);
        padding-bottom: 10px;
      }

      #gal-alamat h3 {
        border-bottom: 5px solid rgb(206, 205, 205);
        padding-bottom: 10px;
      }

      #gal-alamat img {
        width: 262px;
        height: auto;
        margin-bottom: 6px;
      }

      #kontak .container {
        border-top: 5px solid rgb(206, 205, 205);
      }

    </style>

    <title>SMP Negeri 1 Cibadak</title>
  </head>
  <body>

    <section id="header" class="header">
      <div class="container pt-5">

        <div class="row bg-primary">
          <div class="col-lg-1">
            <img src="asset/img/logo_sekolah.png">
          </div>
         @include('navbar/nav-admin')
        </div>

        <div class="row">
          <div class="col-lg-4 bg-warning text-center text-light mt-3 pt-2">
            <h3>MOTTO</h3>
          </div>    
        </div>

        <div class="row">
          <div class="col-lg-4 bg-primary text-light mt-3 pt-3">
            <p>SMP Negeri 1 Cibadak (Cerdas Beretika) Ceria, Empati, Rasional, Damai, Aktif, Sabar, Bersih, Elok, Tulus, Iman, Konsisten, Amanah.</p>
          </div>    
        </div>

      </div>
    </section>

    <section id="sambutan" class="sambutan">
      <div class="container mt-4">

        <div class="row justify-content-center">
          <div class="col-lg-4 text-center">
            <h3>Sambutan Kepala Sekolah SMP Negeri 1 Cibadak</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9 text-center mt-3">
            <p>Puji syukur kita panjatkan kehadirat Allah SWT.yang senantiasa dengan sifat kasih dan sayangnya banyak memberikan nikmat yang senantiasa tidak terhenti tercurah dan semoga kita termasuk orang yang pandai bersyukur dan dapat memanfa...</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9 text-center mt-3">
            <button type="button" class="btn btn-primary">Lebih Lanjut</button>
          </div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-lg-2 text-center pt-1 mx-4 border-primary pb-2">
            <img src="asset/img/fasilitas.png">
            <br>
            <a href="#">Fasilitas</a>
          </div>
          <div class="col-lg-2 text-center pt-1 mx-4 border-primary pb-2">
            <img src="asset/img/lokasi.png">
            <br>
            <a href="#">Lokasi</a>
          </div>
          <div class="col-lg-2 text-center pt-1 mx-4 border-primary pb-2">
            <img src="asset/img/sejarah.png">
            <br>
            <a href="#">Sejarah</a>
          </div>
          <div class="col-lg-2 text-center pt-1 mx-4 border-primary pb-2">
            <img src="asset/img/prestasi.png">
            <br>
            <a href="#">Prestasi</a>
          </div>
        </div>

      </div>
    </section>

    <section id="berita" class="berita mt-4">
      <div class="container pt-5 pb-5">
        <h3>BERITA</h3>

        <div class="row justify-content-center mt-4">
          <div class="col-lg-3 text-center">
            <img src="asset/img/b1.jpg">
            <br>
            <a href="#">Kegiatan belajar mengajar di...</a>
          </div>
          <div class="col-lg-3 text-center">
            <img src="asset/img/b3.jpg">
            <br>
            <a href="#">Kegiatan belajar mengajar di...</a>
          </div>
          <div class="col-lg-3 text-center">
            <img src="asset/img/b1.jpg">
            <br>
            <a href="#">Kegiatan belajar mengajar di...</a>
          </div>
          <div class="col-lg-3 text-center">
            <img src="asset/img/b3.jpg">
            <br>
            <a href="#">Kegiatan belajar mengajar di...</a>
          </div>
        </div>

      </div>
    </section>

    <section id="profil" class="profil">
      <div class="container mt-5">
        <h3>PROFIL SEKOLAH</h3>
        <div class="row justify-content-center mt-3 pt-1">
          <div class="col-lg-7 text-center">
            <iframe width="540" height="295" src="https://www.youtube.com/embed/M_c2Jcg4egY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-lg-5">
            <p>Di samping adalah profil sekolah kami secara keseluruhan dari mulai bagian depan hingga seluruh fasilitas yang terdapat disekolah kami kami akan memberikan yang terbaik untuk kenyamanan para siswa kami dalam menimba ilmu</p>
            <button type="button" class="btn btn-primary btn-lg">Lebih Lanjut</button>   
          </div>
        </div>
      </div>
    </section>

    <section id="gal-alamat" class="gal-alamat">
      <div class="container mt-5">
        <div class="row">

          <div class="col-lg-6">
            <h3>GALLERY</h3>
          </div>

          <div class="col-lg-6">
            <h3>ALAMAT</h3>
          </div>

          <div class="row justify-content-center mt-3 pd-1">

            <div class="col-lg-6 text-center">
              <img src="asset/img/gl1.jpg">
              <img src="asset/img/gl2.jpg">
              <img src="asset/img/gl3.jpg">
              <img src="asset/img/gl4.jpg">
            </div>
            <div class="col-lg-6 text-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.96837473556!2d106.79039471431688!3d-6.894386269382046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68316af442641b%3A0x96edb366f22211d5!2sSMP%20Negeri%201%20CIBADAK!5e0!3m2!1sen!2sid!4v1609780918096!5m2!1sen!2sid" width="550" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="kontak" class="kontak">
      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 text-center mt-4">
            <h5>Halaman Umum</h5>
            <a href="#">Data Guru</a>
            <br>
            <a href="#">Profil Sekolah</a>
            <br>
            <a href="#">PPDB SMPN 1 Cibadak</a>
            <br>
            <a href="#">Panduan PPDB</a>
          </div>

          <div class="col-lg-3 text-center mt-4">
            <h5>Contact</h5>
            <p>Jl. Siliwangi No 123, Cibadak, Cibadak, Sukabumi, Jawa Barat 43351, Indonesia, (0266)531333</p>
            <p>Email :
              info@smpn1cibadak.sch.id
              smpn1cbd_kabsi@yahoo.co.id</p>
          </div>

          <div class="col-lg-3 text-center mt-4">
            <h5>Social Link</h5>
            <img src="asset/img/fb.png">
            <img src="asset/img/tw.png">
            <img src="asset/img/gl.png">
          </div>

        </div>
      </div>
    </section>

    <footer>
      <div class="row justify-content-center text-center bg-dark text-light pt-3 mt-4">
        <p>Copyright SMP Negeri 1 Cibadak</p>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>