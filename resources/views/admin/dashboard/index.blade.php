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

    <section class="section">
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
                    <td id="tetesaninfus1">Tidak Menetes</td>
                    <td id="volume">00.00</td>

                    

                  </tr>
                
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection


@section('scriptJs')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function()  {
        $("#volume").load("{{ url('bacavolume') }}");
        $("#tetesaninfus1").load("{{ url('bacainfus') }}");
      }, 1000);

    });

    
       
  </script>

@endsection