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
              <h5 class="card-title">Table Admin</h5>

              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jam Dinas</th>
                    <th scope="col">Aksi</th>
                    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#tambahjamdinas">Tambah Jam Dinas</button>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($data as $key => $val)    
                  <tr>
                    <th scope="row">{{ $key + $data->firstItem() }}</th>
                    <td>{{ $val->jam_dinas }}</td>
                    {{-- <td>{{ $val->tetesan }}</td> --}}
                    <td>
                          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editjamdinas{{ $val->id }}">Edit</a>

                          <a href="{{ route('jamDinas.delete', ['id' => $val->id]) }}"
                            class="btn btn-danger hapus">Delete</a>
  
                    </td>
                    
                  </tr>
                    

                  @endforeach
                  
                </tbody>
                </table>
               {{ $data->links() }}

              <!-- End Default Table Example -->
            </div>
        @include('admin.jam_dinas.from')
          </div>

          

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection

@section('js')
@endsection
