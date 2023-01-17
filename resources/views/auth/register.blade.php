<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar - Komunitech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/')}}img/favicon.png" rel="icon">
  <link href="{{asset('/')}}img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('/')}}vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('/')}}img/logo.png" alt="">
                  <span class="d-none d-lg-block">Komunitech</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukkan detail pribadi Anda untuk membuat akun</p>
                  </div>

                  <form class="row g-3" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Anda</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email Anda</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama pengguna</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">u/</span>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Kata sandi</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Saya setuju dan menerima <a href="#">syarat dan ketentuan</a></label>
                        <div class="invalid-feedback">Anda harus setuju sebelum mengirimkan.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah memiliki akun? <a href="{{ route('login') }}">Masuk</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/')}}vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('/')}}vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('/')}}vendor/quill/quill.min.js"></script>
  <script src="{{asset('/')}}vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('/')}}vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('/')}}vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/')}}js/main.js"></script>

</body>

</html>