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

      #guru .col-lg-2 {
        border-bottom: 5px solid;
        padding-left: 50px;
        padding-right: 50px;
      }

      #guru h3 {
        border-bottom: 5px solid rgb(206, 205, 205);
        padding-bottom: 10px;
      }

      #kontak .container {
        border-top: 5px solid rgb(206, 205, 205);
      }

    </style>

    <title>Siswa - SMP Negeri 1 Cibadak</title>
  </head>
  <body>

    <section id="header" class="header">
      <div class="container pt-5">

        <div class="row bg-primary">
          <div class="col-lg-1">
            <img src="../asset/img/logo_sekolah.png">
          </div>
          @include('navbar/nav-admin')
        </div>

      </div>
    </section>

    <section id="guru" class="guru">
      <div class="container mt-4">

        <div class="row justify-content-center">
          <div class="col-lg-5 text-center">
            <h3>Data Siswa</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12 mt-3">
          <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIS</th>
                <th scope="col">Gender</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=0; ?> 
            @foreach($datasiswa as $siswa)
                <tr>
                <?php $no++; ?>
                <td>{{$no}}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->gender }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Edit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                          <form>
                              <div class="form-group">
                                  <input type="text" name="nama" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Nama">
                                  <input type="text" name="nis" class="form-control mb-2" id="exampleFormControlInput1" placeholder="NIS">
                                  <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected disabled>Gender</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    </select>
                                  <input type="text" name="kelas" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Kelas">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>

                          </div>
                        </div>
                      </div>
                    </div>

                    <a href="/hapussiswa/{{$siswa->id}}">
                    <button class="btn btn-danger">Hapus</button>
                    </a>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            {{ $datasiswa->links() }}

            <div class="row">
            <div class="col-lg-4">
            <form action="siswa/tambahsiswa" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="nama" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Nama">
                    <input type="text" name="nis" class="form-control mb-2" id="exampleFormControlInput1" placeholder="NIS">
                    <select class="form-select" name="gender" aria-label="Default select example">
                    <option selected disabled>Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                    <input type="text" name="kelas" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Kelas">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            </div>
            </div>

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
            <img src="../asset/img/fb.png">
            <img src="../asset/img/tw.png">
            <img src="../asset/img/gl.png">
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