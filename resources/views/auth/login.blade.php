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
              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3 ">Login</p>

                </div>

                <div class="divider d-flex align-items-center my-4">
                  <h2 class="text-center fw-bold mx-3 mb-0 me-3">Iniciar Sesion</h2>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">usuario:</label>
                  <input type="text" id="user" name="user" class="form-control form-control-lg"
                    placeholder="Ingrese usuario" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Contraseña:</label>
                  <input type="password" id="pass" name="pass" class="form-control form-control-lg"
                    placeholder="Ingrese Contraseña" />

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
                </form>
                  </div>

                  <p class="small fw-bold mt-2 pt-1 mb-0">Si no tienes una cuenta? <a href="#!"
                      class="link-danger"><a href="{{ route('register') }}">Registrarte</a></a></p>
                </div>


            </div>
          </div>
        </div>

      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>
