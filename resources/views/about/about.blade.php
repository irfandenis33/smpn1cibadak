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
        padding-bottom: 50px;
      }

      #about .col-lg-2 {
        border-bottom: 5px solid;
        padding-left: 50px;
        padding-right: 50px;
      }

      #about h3 {
        border-bottom: 5px solid rgb(206, 205, 205);
        padding-bottom: 10px;
      }

      #kontak .container {
        border-top: 5px solid rgb(206, 205, 205);
      }

    </style>

    <title>About - SMP Negeri 1 Cibadak</title>
  </head>
  <body>

    <section id="header" class="header">
      <div class="container pt-5">

        <div class="row bg-primary">
          <div class="col-lg-1">
            <img src="asset/img/logo_sekolah.png">
          </div>
          @include('navbar/navbar')
        </div>

      </div>
    </section>

    <section id="about" class="about">
      <div class="container mt-4">

        <div class="row justify-content-center">
          <div class="col-lg-5 text-center">
            <h3>About SMP Negeri 1 Cibadak</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12 mt-3">
            <p>
SMP Negeri 1 CIbadak didirikan pada tahun 1965 berdasarkan Surat Keputusan Menteri P & K Republik Indonesia. Pada mulanya, Sekolah didirikan di daerah kebon pala yang sekarang menjadi Pasar & Terminal cibadak. Berangkat dari antusias dan kepedulian masyarakat terhadap dunia pendidikan, maka sekolah ini resmi berdiri dengan nama SMP Cibadak.
<br>
<br>
SMP Negeri 1 Cibadak  sebagai bagian dari dunia pendidikan yang berada di Kecamatan Cibadak mempunyai peranan yang sangat penting dalam meningkatkan sumber daya manusia Indonesia seutuhnya pada anak usia sekolah khususnya pada jenjang Sekolah menengah pertama, yang berada di Kabupaten Sukabumi.
<br>
<br>
Kemajuan Ilmu Pengetahuan dan Teknologi yang semakin cenderung membuat orang semakin sibuk dalam mengupayakan urusan duniawi. Mereka seolah-olah melupakan kebutuhan manusia yang paling utama yaitu kebutuhan akan pendidikan akhlak yang akan menjamin kebahagiaan dunia maupun akhirat. Hal ini tidak hanya terjadi di kota-kota besar saja, bahkan dampaknya ke daerah-daerah pedesaan sudah semakin terasa. Oleh karena itu. SMP Negeri 1 Cibadak   merupakan salah satu pilihan bagi masyarakat untuk menyekolahkan putra-putrinya setelah tamat SD/MI, yang dapat memberikan Ilmu Pengetahuan pada peserta didiknya.  
<br>
<br>
SMP Negeri 1 Cibadak, keberadaannya sangat diperlukan oleh masyarakat di lingkungan Kecamatan Cibadak,  khususnya dan umumnya oleh masyarakat sekitar. Mereka berharap dengan menyekolahkan anaknya di SMP, sedikit banyak dapat membantu peran orang tua dalam menyelamatkan putra-putrinya dari bahaya yang di akibatkan oleh dampak negatif kemajuan Ilmu pengetahuan dan teknologi serta pengaruh perkembangan zaman dan dari pergaulan lingkungan yang negatif.
<br>
<br>
Kegiatan Belajar Mengajar yang diselenggarakan keberadaanya sangat membantu masyarakat dalam memenuhi tuntutan pengetahuan melalui jalur bidang pendidikan terutama pendidikan agama Islam, sehingga segenggam harapan terlahir dari hati nurani yang sangat dalam yang di motivasi oleh semangat belajar siswa/i serta simpati masyarakat sekitar, walau dalam kondisi ekonomi yang tak menentu, namun mereka tetap berupaya untuk dapat ke luar dari kebodohan dan keterbelakangan, guna mengejar ketinggalan langkah saudaranya yang jauh lebih maju.

 </p>
          </div>
        </div>
    </section>

    <section id="kontak" class="kontak">
      <div class="container mt-3">
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