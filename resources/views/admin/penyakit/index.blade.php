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
              <h5 class="card-title">Tabel Penyakit</h5>

              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Penyakit</th>
                    <th scope="col">Tetesan</th>
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
                    <td>{{ $val->nama_penyakit }}</td>
                    <td>{{ $val->tetesan }}</td>
                    <td>
                          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit{{ $val->id }}">Edit</a>

                          <a href=""
                            class="btn btn-danger hapusPenyakit" data-id="{{ $val->id }}">Delete</a>
  
                    </td>
                    
                  </tr>
                    

                  @endforeach
                  
                </tbody>
              </table>
              {{ $data->links() }}

              <!-- End Default Table Example -->
            </div>
        @include('admin.penyakit.from')

          </div>

        </div>

      </div>
      

    </section>


           


</main><!-- End #main -->
</div>
@endsection

@section('js')
@endsection

@section('script')

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    {{-- <script src="dist/sweetalert2.all.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script>
        @if (session()->has('success'))
            swal("Success!", "Data Berhasil dibuat", "success");
        @endif
        @if (session()->has('successEdit'))
            swal("Success!", "Data Berhasil diedit", "success");
        @endif
		    @if (session()->has('success_hapus'))
            swal("Success!", "Data Berhasil dihapus", "success");
        @endif
        $('.hapusPenyakit').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + id;
                    } else {
                        swal("Batal menghapus akun!");
                    }
                });
        });

        
    </script>
@endsection

