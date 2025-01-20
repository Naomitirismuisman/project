<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">"
   <link rel="stylesheet" href="/css/home.css">
    <title>Home</title>
</head>
<body>
  
  <section class="login mt-5">
    <div class="container-fluid" style="top: 2rem; position: relative;">
      <div class="row justify-content-center">
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
          <div class="card" style="background-color: #9EBAF3;">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <img src="img/logo.png" alt="Logo" class="img-fluid mb-4">
              </div>
              <h2 class="text-center mb-4" style="color: #354739;">SMP NEGERI 11 JAYAPURA</h2>
              <form>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan username" required>
                  <div class="invalid-feedback">Username tidak boleh kosong</div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
                  <div class="invalid-feedback">Password tidak boleh kosong</div>
                </div>
                <button type="submit" class="btn btn-dark text-white  w-100">Login</button>
                <p class="text-center mt-3">Belum memiliki akun? <a href="register.html" class="text-decoration-none">Daftar sekarang</a></p>
                <div class="social-login mt-3 text-center justify-content-between">
                  <a href="#" class="btn btn-google  rounded-circle m2-2">
                    <i class="bx bxl-google fs-3 "></i>
                  </a>
                  <a href="#" class="btn btn-facebook  rounded-circle me-2">
                    <i class="bx bxl-facebook-square fs-3"></i>
                  </a>
                  <a href="#" class="btn btn-twitter  rounded-circle me-2">
                    <i class="bx bxl-twitter fs-3"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>