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
          <li class="breadcrumb-item active">Penyakit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card table-responsive">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Penyakit</th>
                    <th scope="col">Tetsan</th>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Tambah Data</button>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach($data as $key => $val)     --}}
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                  
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                 
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                   
                  </tr>
                   <tr>
                    <th scope="row">6</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                  
                  </tr>
                   <tr>
                    <th scope="row">7</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                
                  </tr>
                   <tr>
                    <th scope="row">8</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                  </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                  </tr>
                     <tr>
                    <th scope="row">8</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                  </tr>
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>

      </div>
       {{-- <div class="card"> --}}
              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3">
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Penyakit</label>
                            <input type="text" class="form-control" id="inputNanme4">
                          </div>
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Tetesan</label>
                            <input type="text" class="form-control" id="inputNanme4">
                          </div>
                          
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                          </div>
                        </form><!-- Vertical Form -->
                      </div>  
                      {{-- <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div> --}}
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->

              </div>
            {{-- </div> --}}

    </section>


           


</main><!-- End #main -->

@endsection

@section('js')
@endsection
