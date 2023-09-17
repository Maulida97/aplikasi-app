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
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card table-responsive">
            <div class="card-body">
              <h5 class="card-title">Pasien Rawat Inap</h5>

              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bangsal</th>
                    <th scope="col">Kamar</th>
                    <th scope="col">No Tempat Tidur</th>
                    <th scope="col">Penyakit</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis Infus</th>
                    <th scope="col">Aksi</th>
                    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" 
                            data-bs-target="#modaltambahpasien">Tambah Pasien</button>
                    
                  </tr>
                </thead>
                <tbody>
                   @foreach($data as $key => $val)
                  <tr>
                    <th scope="row">{{ $key + $data->firstItem() }}</th>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->bangsal }}</td>
                    <td>{{ $val->kamar }}</td>
                    <td>{{ $val->no_tempat_tidur }}</td>
                    <td>{{ $val->penyakit }}</td>
                    <td>{{ $val->tanggal }}</td>
                    <td>{{ $val->jenis_infus }}</td>
                    <td>
                      <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#">Edit</a>

                      <a href="" class="btn btn-danger " data-id="">Delete</a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
               {{ $data->links() }}

              <!-- End Default Table Example -->
            </div>
        @include('admin.pasien.from')

          </div>

          

        </div>

      </div>
    </section>

  </main><!-- End #main -->>

@endsection

@section('js')
@endsection
