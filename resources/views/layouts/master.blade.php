<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('master/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('master/assets/img/favicon.png') }}">
  <title>@yield('title') | Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('master/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Argon Dashboard -->
  <link id="pagestyle" href="{{ asset('master/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />

  <!-- Datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <style>
    .card {
      border: none;
      border-radius: 1rem;
      transition: all 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .numbers p {
      font-size: 0.85rem;
      letter-spacing: 0.5px;
    }

    .numbers h5 {
      font-size: 1.5rem;
      font-weight: 700;
    }

    .icon-shape {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  @include('layouts.sidenav')

  <main class="main-content position-relative border-radius-lg">
    @include('layouts.navbar')

    <div class="container-fluid py-4">
      {{-- ==== DASHBOARD COUNTERS ==== --}}
      <div class="row">
        <!-- Box 1 -->
        <div class="col-xl-3 col-sm-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-uppercase text-muted font-weight-bold mb-1">Users</p>
                    <h5 class="font-weight-bolder text-primary">1,245</h5>
                    <p class="text-success text-sm mb-0">
                      <span class="font-weight-bolder">+5%</span> since last month
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-circle-08 text-white text-lg" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="col-xl-3 col-sm-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-uppercase text-muted font-weight-bold mb-1">Orders</p>
                    <h5 class="font-weight-bolder text-danger">312</h5>
                    <p class="text-danger text-sm mb-0">
                      <span class="font-weight-bolder">-2%</span> since last week
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                    <i class="ni ni-cart text-white text-lg" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="col-xl-3 col-sm-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-uppercase text-muted font-weight-bold mb-1">Revenue</p>
                    <h5 class="font-weight-bolder text-success">$4,200</h5>
                    <p class="text-success text-sm mb-0">
                      <span class="font-weight-bolder">+8%</span> than last month
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-white text-lg" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="col-xl-3 col-sm-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-uppercase text-muted font-weight-bold mb-1">Visitors</p>
                    <h5 class="font-weight-bolder text-warning">12,430</h5>
                    <p class="text-success text-sm mb-0">
                      <span class="font-weight-bolder">+12%</span> since yesterday
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                    <i class="ni ni-world text-white text-lg" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- === Content Page === --}}
      @yield('content')
    </div>
  </main>

  <!-- Core JS -->
  <script src="{{ asset('master/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('master/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('master/assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="{{ asset('master/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  @yield('script')
</body>

</html>
