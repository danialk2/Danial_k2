<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    
  <title>Kruistraat | Dashboard</title>
  <link rel="icon" href="asset/images/logo/kruisstraat_logo_single.png">
    
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        @include('admin.dashboard.sidebar')
        
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>Dashboard </h1>
              <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              </div>
            </div>
          </section>
          <div class="monitoringMail">
            <div class="row head-monitor">
              
              {{-- Mail Card --}}
              <div class="col-4">
                <div class="card card-statistic-2">
                  <div class="card-stats">
                    <div class="card-stats-title">
                      <h6>Partners</h6>
                    </div>
                    <div class="card-stats-items">
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">1</div>
                        <div class="card-stats-item-label">Registered</div>
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">1</div>
                        <div class="card-stats-item-label">Application</div>
                      </div>
                    
                    </div>
                    
                  </div>
                  <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Merchants</h4>
                    </div>
                    <div class="card-body">
                      1
                    </div>
                  </div>
                </div>
              </div>
              
              {{-- Events Card --}}
              <div class="col-4">
                <div class="card card-statistic-2">
                  <div class="card-stats">
                    <div class="card-stats-title">
                      <h6>Events</h6>
                    </div>
                    <div class="card-stats-items">
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">1</div>
                        <div class="card-stats-item-label">Current</div>
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">1</div>
                        <div class="card-stats-item-label">Incoming</div>
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-count">1</div>
                        <div class="card-stats-item-label">Done</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-icon shadow-danger bg-danger">
                    <i class="far fa fa-building" aria-hidden="true"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Clients</h4>
                    </div>
                    <div class="card-body">
                      1
                    </div>
                  </div>
                </div>
              </div>
              
              {{-- Service Card --}}
              <div class="col-4">
                <div class="card card-statistic-2">
                  <div class="card-stats">
                    <div class="card-stats-title">
                      <h6>Service</h6>
                    </div>
                  
                  </div>
                  <div class="card-icon shadow-dark bg-dark">
                    <i class="far fa fa-file" aria-hidden="true"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Services</h4>
                    </div>
                    <div class="card-body">
                      1
                    </div>
                  </div>
                </div>
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
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
  </body>
</html>