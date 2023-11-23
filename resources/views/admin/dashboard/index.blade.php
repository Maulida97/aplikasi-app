@extends('layouts.app')
@section('head')
    <title>Admin  | Dashboard</title>
@endsection
@section('konten')
   <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            {{-- @foreach($data as $key => $val) --}}
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 1  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3" >
                      <span style=" font-size: 26px; font-weight: bold; color: #012970" id="volume">145</span><span style="color: #012970; font-size: 26px; font-weight: bold;"> %</span>
                      <br>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold" id="tetesaninfus"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            {{-- @endforeach --}}

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 2  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3" >
                      <span style=" font-size: 26px; font-weight: bold; color: #012970" id="volume2">145</span><span style="color: #012970; font-size: 26px; font-weight: bold;"> %</span>
                      <br>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold" id="tetesaninfus2"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 3  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3" >
                      <span style=" font-size: 26px; font-weight: bold; color: #012970" id="volumeinfus3">145</span>
                      <span style="color: #012970; font-size: 26px; font-weight: bold;"> %</span>
                      <br>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold" id="tetesaninfus3"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 4  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0<span>%</span></h6>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 5  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0<span>%</span></h6>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>

                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title"> Ruangan 6  <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-health-book-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0<span>%</span></h6>
                      <span class="text-muted small pt-2 ps-1">Status Infus </span><span class="text-success small pt-1 fw-bold"></span> 
                      {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>


    {{-- <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Tetesan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td >00.00 <span>%</span></td>
                    <td >Tidak Menetes</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td id="volume2">00.00</td>
                    <td id="tetesaninfus2">Tidak Menetes</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td id="volumeinfus3">00.00</td>
                    <td id="tetesaninfus3">Tidak Menetes</td>
                  </tr>
                
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

        </div>

      </div>
    </section> --}}

  </main><!-- End #main -->

@endsection


@section('scriptJs')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function()  {
        $("#volume").load("{{ url('bacavolume') }}");
        $("#tetesaninfus").load("{{ url('bacainfus') }}");
      }, 2000);

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function()  {
        $("#volume2").load("{{ url('bacavolume2') }}");
        $("#tetesaninfus2").load("{{ url('bacainfus2') }}");
      }, 2000);

    });
  </script>

<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function()  {
      $("#volumeinfus3").load("{{ url('bacavolume3') }}");
      $("#tetesaninfus3").load("{{ url('bacainfus3') }}");
    }, 2000);

  });
</script>

@endsection