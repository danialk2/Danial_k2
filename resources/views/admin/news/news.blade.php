<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kruistraat | News</title>
  <link rel="icon" href="asset/images/logo/kruisstraat_logo_single.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../asset/css/components.css">
</head>@stack('page-styles')

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('admin.components.header')
            @include('admin.news.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="bun d-flex">
                            <h1>News</h1>
                            <a class="btn btn-outline-primary ml-3" href="addevents"
                                role="button"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Create News
                            </a>
                        </div>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="events">News</a></div>
                        </div>
                    </div>
                </section>

                <!-- Alert -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $message }}</strong>    
                </div>
                @endif
                
                <div class="detail mt-2">
                    <div class="additional-element mt-3">
                        <div class="row">
                            <div class="col mt-3">
                                <h5>News List</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body table-responsive">
                            <table class="table" id="eventTable">
                                <thead>
                                    <tr style="background-color: #6777ef">
                                        <th class="text-white" scope="col"><b>#</b></th>
                                        <th class="text-white" scope="col"><b>Picture</b></th>
                                        <th class="text-white" scope="col" style="max-width: 50%"><b>Title: ID</b></th>
                                        <th class="text-white" scope="col" style="max-width: 50%"><b>Title: EN</b></th>
                                        <th class="text-white" scope="col"><b>Category :ID</b></th>
                                        <th class="text-white" scope="col"><b>Category :EN</b></th>
                                        <th scope="col" style="max-width: 100px; min-width:80px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <?php $i=1; ?>
                                    @foreach ($data as $datas)
                                    <?php
                                        $code = (123456); 
                                        $_id = base64_encode($code . $datas->id);
                                    ?> --}}
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>
                                            <div class="container" style="object-fit: contain"><img src="#" alt="image" style="width: 150px; height:100px;"></div>
                                        </td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#}</td>
                                        <td>#</td>
                                        <td class="text-center">
                                            <a class="btn btn-outline-warning mt-1"
                                                href="events/editEvent/#" role="button"
                                                style="width: 100%;min-width:60%;"><i class="fa fa-magic mr-2"
                                                aria-hidden="true"></i>Edit</a>
                                            <a class="btn btn-outline-danger mt-2"
                                                href="events/delete/#" role="button"
                                                style="width: 100%;min-width:60%;"><i class="fa fa-trash mr-2"
                                                aria-hidden="true"></i>Delete</a>
                                        </td>
                                    </tr>
                                    {{-- <?php $i++; ?>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                  Copyright &copy; 2021 Kruisstraat
                  <div class="bullet"></div>
                  Developed By Fontys Developer Team
                </div>
                <div class="footer-right">
                  version 1.1
                </div>
              </footer>
        </div>
    </div>

    @stack('before-scripts')
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="asset/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="../../asset/js/scripts.js"></script>
    <script src="../../asset/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../asset/js/page/index-0.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#eventTable').DataTable();
        });
    </script>
</body>

</html>