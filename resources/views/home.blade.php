<!DOCTYPE html>
<html lang="en">

<head>
    @include("shared.header")
</head>

<body>
    <div id="app1" class="main">
        <!-- Brand -->
        <main class="container">
            @include("shared.navbar")
        </main>
        <br>
        <!-- Search -->
        <section class="container">
            <h3 class="">Resultado de "Buscar</h3>
            <div class="my-4">
                <div class="card-search my-3">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="72" class="ms-4 mt-2">
                        </div>
                        <div class="col">
                            <p class="desc-search fw-bold py-0">Mérida, MX</p>
                            <p class="desc-search">Temp. 28° C</p>
                            <p class="desc-search">Ubicación: -20.25, -15.45</p>
                        </div>
                    </div>
                </div>
                <div class="card-search my-3">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="72" class="ms-4 mt-2">
                        </div>
                        <div class="col">
                            <p class="desc-search fw-bold py-0">Mérida, MX</p>
                            <p class="desc-search">Temp. 28° C</p>
                            <p class="desc-search">Ubicación: -20.25, -15.45</p>
                        </div>
                    </div>
                </div>
                <div class="card-search my-3">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="72" class="ms-4 mt-2">
                        </div>
                        <div class="col">
                            <p class="desc-search fw-bold py-0">Mérida, MX</p>
                            <p class="desc-search">Temp. 28° C</p>
                            <p class="desc-search">Ubicación: -20.25, -15.45</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-end" style="max-width: 95%;">Total: 4</p>
            <hr>
        </section>

        <!-- Current -->
        <section class="container pb-4">
            <div class="row">
                <!-- Weather -->
                <div class="col my-3">
                    <div class="col  text-end">
                        <p class="h3 fw-bold text-white">
                            <i class="text-purple fa-solid fa-location-dot"></i>
                            Tehuacán, Puebla
                        </p>
                        <p class="h5 fw-light">México</p>
                    </div>
                    <br>
                    <p class="align-text-bottom h4">
                        <img src="img/cloud.png" alt="Cloud" height="52" class="" style="margin-top: -10px">
                        <span class="">16 °C</span>
                    </p>
                    <!-- Climate -->
                    <p>Parcialmente nublado</p>
                    <!-- Metrics -->

                    <div class="container ms-3">
                        <table width="70%">
                            <tr>
                                <td>Sensación térmica</td>
                                <td>14 °C</td>
                            </tr>
                            <tr>
                                <td>Temperatura min.</td>
                                <td>12 °C</td>
                            </tr>
                            <tr>
                                <td>Temperatura max.</td>
                                <td>14 °C</td>
                            </tr>
                            <tr>
                                <td>Humedad</td>
                                <td>14 °C</td>
                            </tr>
                            <tr>
                                <td>Visibilidad</td>
                                <td>90 %</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Map/City -->
                <div class="col-md-6">
                    <img src="img/mx.jpeg" alt="Imagen" class="img-fluid1 rounded img-map">
                    <p class="text-muted1 mt-2 text-end fw-lighter text-last-updated">Última actualización: 14 Agosto, 2022 18:45 pm</p>
                </div>
            </div>
            <hr>
        </section>

        <!-- Hour -->
        <section class="container pb-4">
            <p class="h5">Pronóstico por Hora</p>

            <div class="vertical-scroll py-4">
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
                <div class="card-hour desc-hour my-2" style="max-width: 95%">
                    <div class="row">
                        <div class="col col-lg-2 col-md-2">
                            <img src="img/cloud.png" alt="Nube" height="50" class="ms-4">
                        </div>
                        <div class="col col-md-2">
                            <p class="fw-bold">08:00</p>
                        </div>
                        <div class="col">
                            <p class="desc-2">Intervalos nubosos</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </section>

        <!-- Weekkly -->
        <section class="container">
            <p class="h5">Pronóstico Semanal</p>
            <!-- scroll -->
            <div class="horizontal-scroll  py-4">

                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-light py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
                <div class="card-week card-dark py-2 text-center">
                    <p class="h5 mt-2">Hoy</p>
                    <img src="img/cloud.png" width="60%" alt="Sem1" class="img-fluid">
                    <p class="h5 mt-2 fw-bold">13° / 18°</p>
                    <p class="desc mt-4">Lluvia moderada a fuerte</p>
                </div>
            </div>
        </section>
        <br>
        <br>
        @include("shared.footer")
    </div>
    <!-- app -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>