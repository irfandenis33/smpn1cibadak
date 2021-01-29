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

      #login {
        margin-top: 120px;
      }

      #login .col-lg-2 {
        border-bottom: 5px solid;
        padding-left: 50px;
        padding-right: 50px;
      }

      #login h3 {
        border-bottom: 5px solid rgb(206, 205, 205);
        padding-bottom: 10px;
      }

    </style>

    <title>Login - SMP Negeri 1 Cibadak</title>
  </head>
  <body>

    <section id="login" class="login">
      <div class="container mt-5">

        <div class="row justify-content-center">
          <div class="col-lg-5 text-center">
            <h3>Login</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-5 mt-3">
          <form action="/login/auth" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
                <input type="nama" class="form-control mb-4" id="exampleFormControlInput1" name="username" placeholder="Email">
                <input type="password" class="form-control mb-4" id="exampleFormControlInput1" name="password" placeholder="Password">
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
    </section>

    <footer>
      <div class="row justify-content-center text-center bg-dark text-light fixed-bottom pt-3 mt-4">
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