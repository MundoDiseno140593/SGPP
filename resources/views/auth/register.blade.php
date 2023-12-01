<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="icon" href="{{ asset('img/logo.webp') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img/logo.webp') }}" type="image/x-icon"/>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{ asset('img/logo.webp') }}"
                class="img-fluid w-70 h-70" alt="Sample image" >
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3 ">Login</p>

                </div>

                <div class="divider d-flex align-items-center my-4">
                  <h2 class="text-center fw-bold mx-3 mb-0 me-3">Iniciar Sesion</h2>
                </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="button" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    Acceso
                </button>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">

                      <label class="form-check-label" for="form2Example3">

                      </label>
                    </div>
                    <a href="#!" class="text-body">Recupera Contraseña</a>
                  </div>
                </form>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Si no tienes una cuenta? <a href="#!"
                      class="link-danger"><a href="{{ route('login') }}">Registrarte</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
