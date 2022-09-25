<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- ------------------------ --}}
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    {{-- Datatable Responsive --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    {{-- DateRangePicker --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="page-wrapper chiller-theme">

        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Office</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employee.index') }}">
                                <i class="fa fa-users"></i>
                                <span>Employees</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Google maps</a>
                                    </li>
                                    <li>
                                        <a href="#">Open street map</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
        <div class="app-bar">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        @if(request()->is('/'))
                        <a href="#" id="show-sidebar"><i class="fas fa-bars "></i></a>
                        @else
                        <a href="#" id="back-btn"><i class="fas fa-chevron-left"></i></a>
                        @endif
                        <h5 class="mb-0">@yield('title')</h5>
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 content">
            <div class="d-flex justify-content-center ">
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="bottom-bar ">
            <div class="d-flex justify-content-center ">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <p class='mb-0'>Home</p>
                        </a>
                        <a href="">
                            <i class="fas fa-user-clock"></i>
                            <p class='mb-0'>Attendance</p>
                        </a>
                        <a href="">
                            <i class="fas fa-briefcase"></i>
                            <p class='mb-0'>Project</p>
                        </a>
                        <a href="">
                            <i class="fa fa-user"></i>
                            <p class='mb-0'>Profile</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-wrapper -->

    <!-- MDB -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    {{-- Datatable --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    {{-- DateRangePicker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    {{-- Data Table --}}
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    {{-- Datatable responsive --}}
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    {{-- Datatable Search Mark or Hightlight --}}
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js"></script>
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {{-- Sweet Alert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Sweet Alert1 --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        jQuery(function($) {

            // Datatable Default Common code
            $.extend(true, $.fn.dataTable.defaults, {
                processing: true,
                serverSide: true,
                responsive: true,
                mark: true,
                columnDefs: [{
                        target: [0],
                        class: 'control',
                    }, {
                        target: 'no-sort',
                        orderable: false
                    },
                    {
                        target: 'hidden',
                        visible: false
                    },
                    {
                        target: 'no-search',
                        searchable: false
                    }
                ],
                language: {
                    paginate: {
                        "previous": "<i class='far fa-arrow-alt-circle-left'></i>",
                        "next": "<i class='far fa-arrow-alt-circle-right'></i>"
                    },
                    processing: "<img src='/image/loading.gif' style='width:50px'/><p class='my-3'>Loading...</p>"
                },
            });

            // CSRF Token
            let token = document.head.querySelector('meta[name="csrf-token"]')
            if (token) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': token.content
                    }
                });
            } else {
                console.error('CSRF Token not found');
            }

            // Back Button
            $('#back-btn').on('click',function(e){
                e.preventDefault();
                window.history.go(-1);
                return false;
            })

            // Sidebar Start
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                    .parent()
                    .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
                $(".fa-bars").removeClass("invisible");
            });
            $("#show-sidebar").click(function(e) {
                e.preventDefault();
                $(".page-wrapper").addClass("toggled");
                $(".fa-bars").addClass("invisible");
            });
            // click sidebar not area close sidebar
            document.addEventListener('click', function(event) {
                if (document.getElementById('show-sidebar').contains(event.target)) {
                    $(".page-wrapper").addClass("toggled");
                    $(".fa-bars").addClass("invisible");
                } else if (!document.getElementById('sidebar').contains(event.target)) {
                    $(".page-wrapper").removeClass("toggled");
                    $(".fa-bars").removeClass("invisible");
                }
            })
            // Sidebar End

            @if (session('create'))
                Swal.fire({
                    title: 'Success',
                    text: "{{ session('create') }}",
                    icon: 'success',
                    confirmButtonText: 'Continue'
                })
            @endif
            @if (session('update'))
                Swal.fire({
                    title: 'Success',
                    text: "{{ session('update') }}",
                    icon: 'success',
                    confirmButtonText: 'Continue'
                })
            @endif
        });
    </script>
    @yield('script')
</body>

</html>
