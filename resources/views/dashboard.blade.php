@extends('Layouts.plantilla')

@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Consultas</h3>
                </div>
                <div class="animate__animated  animate__fadeInDown card-body table-responsive">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 id="paciente">0</h3>

                                    <p>usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-procedures"></i>
                                </div>
                                <a href="" class="small-box-footer"> </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 id="medico">0</h3>

                                    <p>Decanos</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-md"></i>

                                </div>
                                <a href="" class="small-box-footer"></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 id="usuario">0</h3>
                                    <p>Estudiantes</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="" class="small-box-footer"></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3 id="consultas">0</h3>

                                    <p>Empresas</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book-reader"></i>
                                </div>
                                <a href="" class="small-box-footer"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </section>
@endsection
