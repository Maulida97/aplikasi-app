@extends('layouts.app')
@section('head')
    <title>Admin  | Dashboard</title>
    <style>
        .fade-out {
          animation: fadeOut 5s ease-out;
        }
        @keyframes fadeOut {
          0% { opacity: 1; }
          100% { opacity: 0; }
        }
      </style>
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
                      <span style=" font-size: 26px; font-weight: bold; color: #012970" id="volume2"></span><span style="color: #012970; font-size: 26px; font-weight: bold;"> %</span>
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
    @include('admin.dashboard.modal.modal')


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


<!-- Modal -->
{{-- <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ruangan dengan Infus Habis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="notificationList">
            <!-- List ruangan dengan infus habis akan ditampilkan di sini -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="card">
    <div class="modal fade"  id="notificationModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ruangan dengan Infus Habis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>

          </div>
          <div class="modal-body">
            <div id="notificationList">
              <!-- List ruangan dengan infus habis akan ditampilkan di sini -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection


@section('scriptJs')
<script>
@if (session()->has('success'))
Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
@endif
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  <script type="text/javascript">
    $(document).ready(function() {
      // Buat variabel global untuk menyimpan status notifikasi
      var lastNotification = {};

      // Buat variabel global untuk status modal
      var modalShown = false;

      // Fungsi untuk menampilkan modal
      function showModal() {
        // Periksa apakah ada notifikasi yang perlu ditampilkan
        var notificationsExist = $("#notificationList").children().length > 0;
        if (notificationsExist) {
          $("#notificationModal").modal("show");
          modalShown = true;
        }
      }

      setInterval(function() {
        // Ruangan 1
        $("#volume").load("{{ url('bacavolume') }}", function(response, status, xhr) {
          if (status == "success") {
            checkAndNotify(response, "Ruangan 1");
          }
        });
        $("#tetesaninfus").load("{{ url('bacainfus') }}");

        // Ruangan 2
        $("#volume2").load("{{ url('bacavolume2') }}", function(response, status, xhr) {
          if (status == "success") {
            checkAndNotify(response, "Ruangan 2");
          }
        });
        $("#tetesaninfus2").load("{{ url('bacainfus2') }}");

        // Ruangan 3
        $("#volumeinfus3").load("{{ url('bacavolume3') }}", function(response, status, xhr) {
          if (status == "success") {
            checkAndNotify(response, "Ruangan 3");
          }
        });
        $("#tetesaninfus3").load("{{ url('bacainfus3') }}");

      }, 1000);

      function checkAndNotify(response, ruangan) {
        // Ubah string respons menjadi angka
        var data = parseInt(response.trim());

        // Bandingkan dengan status notifikasi terakhir
        var lastStatus = lastNotification[ruangan];

        // Daftar kondisi yang memunculkan notifikasi
        if (data == 30 && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Menjelang Habis");
        } else if (data == 20 && lastStatus != "Sudah Rendah" && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Sudah Rendah");
        } else if (data == 15 && lastStatus != "Sangat Rendah" && lastStatus != "Sudah Rendah" && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Sangat Rendah");
        } else if (data == 10 && lastStatus != "Kritis" && lastStatus != "Sangat Rendah" && lastStatus != "Sudah Rendah" && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Kritis");
        } else if (data == 5 && lastStatus != "Sangat Kritis" && lastStatus != "Kritis" && lastStatus != "Sangat Rendah" && lastStatus != "Sudah Rendah" && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Sangat Kritis");
        } else if (data == 0 && lastStatus != "Habis" && lastStatus != "Sangat Kritis" && lastStatus != "Kritis" && lastStatus != "Sangat Rendah" && lastStatus != "Sudah Rendah" && lastStatus != "Menjelang Habis") {
          addToNotificationList(ruangan, data, "Habis");
        }
      }

      function addToNotificationList(ruangan, data, status) {
        // Periksa apakah notifikasi sudah ada
        var existingElement = $("#" + ruangan + "-" + status);

        // Jika notifikasi belum ada, tambahkan
        if (existingElement.length === 0) {
          // Tambahkan notifikasi baru
          var listElement = $("<li>").text("Ruangan " + ruangan + " - " + status).attr("id", ruangan + "-" + status);
          $("#notificationList").append(listElement);

          // Tampilkan modal jika belum muncul
          if (!modalShown) {
            showModal();
          }

          // Hapus notifikasi setelah 5 detik
          listElement.addClass("fade-out");
          setTimeout(function() {
            listElement.remove();
          }, 3000);
        }
      }

      // Atur ulang status modalShown saat modal ditutup
      $("#notificationModal").on("hidden.bs.modal", function() {
        modalShown = false;
      });
    });
  </script>










@endsection
