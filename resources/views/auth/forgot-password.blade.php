<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lupa Password</title>
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Lupa Password?</h4>
              <h6 class="font-weight-light">Masukkan email untuk reset password</h6>

              @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
              @endif

              <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                         name="email" value="{{ old('email') }}" required placeholder="Email">
                  @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    Kirim Link Reset
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="{{ route('login') }}" class="text-primary">Kembali ke Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
</body>
</html>
