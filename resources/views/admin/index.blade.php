@extends('adminlte::page')

@section('title', 'DASHBOARD')
@section('title', 'DASHBOARD')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="col-md-15">
                <div class="card bg-white shadow-lg rounded">
                    <div class="card-body">
                        <h5 class="card-title text-center">Recuadro 1</h5>
                        <p class="card-text text-center">¡Bienvenido!</p>
                        <label class="switch-button" for="switch">
                            <div class="switch-outer">
                                <input id="switch" type="checkbox">
                                <div class="button">
                                    <span class="button-toggle"></span>
                                    <span class="button-indicator"></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-15">
                <div class="card bg-white text-white shadow-lg rounded">

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <div class="chart">
                        <!-- Canvas para el gráfico de líneas -->
                        <canvas id="chart-line" class="chart-canvas" height="300" width="606"></canvas>
                    </div>

                    <script>
                        // Datos para el gráfico de líneas
                        const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
                        const data = {
                            labels: labels,
                            datasets: [{
                                    label: 'Ventas mensuales',
                                    data: [100, 10, 150, 250, 180, 220],
                                    borderColor: 'rgb(75, 192, 192)',
                                    tension: 0.4
                                },
                                {
                                    label: 'Otra línea',
                                    data: [50, 30, 80, 120, 90, 110],
                                    borderColor: 'rgb(255, 99, 132)',
                                    tension: 0.4
                                }
                            ]
                        };

                        // Configuración del gráfico de líneas
                        const config = {
                            type: 'line',
                            data: data,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        };

                        // Crear el gráfico de líneas en el canvas con el ID 'chart-line'
                        var myChartLine = new Chart(
                            document.getElementById('chart-line'),
                            config
                        );
                    </script>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="col-md-12">
                <div class="card bg-primary text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-sm mb-2">Usuarios:</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users fa-lg mr-1"></i>
                            <h4 class="text-lg ml-auto">{{ $usersCount }}</h4>
                        </div>
                        <a href="/admin/users" class="ml-auto text-white">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card bg-danger text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-sm mb-2">Post:</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-blog"></i>
                            <h4 class="text-lg ml-auto">{{ $postCount }}</h4>
                        </div>
                        <a href="/admin/posts" class="ml-auto text-white">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Ingresos Hoy</p>
                            <h5 class="font-weight-bolder mb-0">
                                53,000€
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Ventas</p>
                            <h5 class="font-weight-bolder mb-0">
                                103,430€
                                <span class="text-success text-sm font-weight-bolder">+5%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Gastos</p>
                            <h5 class="font-weight-bolder mb-0">
                                10,430€
                                <span class="text-danger text-sm font-weight-bolder">-10%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card bg-white text-white shadow-lg rounded">
                <div class="card-body">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('myChart');
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                datasets: [{
                                    label: '# of Votes',
                                    data: [10, 19, 3, 5, 2, 3],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-9">
            <div class="card bg-white text-white shadow-lg rounded">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Projects</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 done</span> this month
                                </p>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Companies</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Members</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Budget</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Soft UI XD Version</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Ryan Tompson">
                                                    <img src="../assets/img/team-1.jpg" alt="team1">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Romina Hadid">
                                                    <img src="../assets/img/team-2.jpg" alt="team2">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Alexander Smith">
                                                    <img src="../assets/img/team-3.jpg" alt="team3">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Jessica Doe">
                                                    <img src="../assets/img/team-4.jpg" alt="team4">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> $14,000 </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">75%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-75" role="progressbar"
                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Add Progress Track</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Romina Hadid">
                                                    <img src="../assets/img/team-2.jpg" alt="team5">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Jessica Doe">
                                                    <img src="../assets/img/team-4.jpg" alt="team6">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> $3,000 </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">75%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-75" role="progressbar"
                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Romina Hadid">
                                                    <img src="../assets/img/team-3.jpg" alt="team8">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Jessica Doe">
                                                    <img src="../assets/img/team-1.jpg" alt="team9">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> Not set </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">100%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success w-100" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Ryan Tompson">
                                                    <img src="../assets/img/team-4.jpg" alt="user1">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Romina Hadid">
                                                    <img src="../assets/img/team-3.jpg" alt="user2">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Alexander Smith">
                                                    <img src="../assets/img/team-4.jpg" alt="user3">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Jessica Doe">
                                                    <img src="../assets/img/team-1.jpg" alt="user4">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> $20,500 </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">100%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success w-100" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Ryan Tompson">
                                                    <img src="../assets/img/team-4.jpg" alt="user5">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> $500 </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">25%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-25" role="progressbar"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="25">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Ryan Tompson">
                                                    <img src="../assets/img/team-1.jpg" alt="user6">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Jessica Doe">
                                                    <img src="../assets/img/team-4.jpg" alt="user7">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> $2,000 </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">50%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-50" role="progressbar"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="50">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .switch-button {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            justify-content: center;
            margin: auto;
            height: 55px;
        }

        .switch-button .switch-outer {
            height: 100%;
            background: #252532;
            width: 115px;
            border-radius: 165px;
            -webkit-box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
            box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
            border: 1px solid #32303e;
            padding: 6px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
        }

        .switch-button .switch-outer input[type="checkbox"] {
            opacity: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            position: absolute;
        }

        .switch-button .switch-outer .button-toggle {
            height: 42px;
            width: 42px;
            background: -webkit-gradient(linear,
                    left top,
                    left bottom,
                    from(#3b3a4e),
                    to(#272733));
            background: -o-linear-gradient(#3b3a4e, #272733);
            background: linear-gradient(#3b3a4e, #272733);
            border-radius: 100%;
            -webkit-box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
            box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
            position: relative;
            z-index: 2;
            -webkit-transition: left 0.3s ease-in;
            -o-transition: left 0.3s ease-in;
            transition: left 0.3s ease-in;
            left: 0;
        }

        .switch-button .switch-outer input[type="checkbox"]:checked+.button .button-toggle {
            left: 58%;
        }

        .switch-button .switch-outer input[type="checkbox"]:checked+.button .button-indicator {
            -webkit-animation: indicator 1s forwards;
            animation: indicator 1s forwards;
        }

        .switch-button .switch-outer .button {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .switch-button .switch-outer .button-indicator {
            height: 25px;
            width: 25px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            border-radius: 50%;
            border: 3px solid #ef565f;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            right: 10px;
            position: relative;
        }

        @-webkit-keyframes indicator {
            30% {
                opacity: 0;
            }

            0% {
                opacity: 1;
            }

            100% {
                opacity: 1;
                border: 3px solid #60d480;
                left: -68%;
            }
        }

        @keyframes indicator {
            30% {
                opacity: 0;
            }

            0% {
                opacity: 1;
            }

            100% {
                opacity: 1;
                border: 3px solid #60d480;
                left: -68%;
            }
        }
    </style>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-something-unique" crossorigin="anonymous" />
@stop
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-something-unique" crossorigin="anonymous"></script>
    <script>
        function toggleFichado() {
            var button = document.getElementById("fichadoButton");
            if (button.innerText === "Fichado") {
                button.innerText = "No Fichado";
                button.classList.remove("btn-success");
                button.classList.add("btn-outline-light");
            } else {
                button.innerText = "Fichado";
                button.classList.remove("btn-outline-light");
                button.classList.add("btn-success");
            }
        }

        function toggleFichado() {
            var button = document.getElementById("fichadoButton");
            if (button.innerText === "Fichado") {
                button.innerText = "No Fichado";
                button.classList.remove("btn-success");
                button.classList.add("btn-outline-light");
            } else {
                button.innerText = "Fichado";
                button.classList.remove("btn-outline-light");
                button.classList.add("btn-success");
            }
        }
    </script>
@stop
