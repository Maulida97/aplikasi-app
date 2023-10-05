@extends('layouts.app')
@section('head')
    <title>Admin  | Dashboard</title>
@endsection
@section('konten')

<div class="content-wrapper">
   <main id="main" class="content-wrapper">

    <div class="pagetitle ">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Bangsal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card table-responsive">
            <div class="card-body">
              <h5 class="card-title">Tabel Alat</h5>
              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#verticalycentered">Tambah Data</button>
                  </tr>
                </thead>
                <tbody>
                    {{-- @php
                    $no = 1;
                    @endphp --}}
                    @foreach($data as $key => $val)    
                  <tr>
                    <th scope="row">{{ $key + $data->firstItem() }}</th>
                    <td>{{ $val->kode }}</td>
                    <td>{{ $val->name }}</td>
                    <td>
                          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit{{ $val->id }}">Edit</a>

                          <a href="{{ route('alat.delete', ['id' => $val->id]) }}"
                            class="btn btn-danger hapus">Delete</a>
  
                    </td>
                    
                  </tr>
                    

                  @endforeach
                  
                </tbody>
              </table>
              {{ $data->links() }}

              <!-- End Default Table Example -->
            </div>
        @include('admin.alat.from')

          </div>

        </div>

      </div>
      

    </section>


           


</main><!-- End #main -->
</div>
@endsection




