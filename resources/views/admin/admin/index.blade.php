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
                    <th scope="col">Nama</th>
                    <th scope="col">User Name</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Aksi</th>
                    <button type="button" class="btn btn-outline-primary mb-5" data-bs-toggle="modal" data-bs-target="#modaltambahadmin">Tambah Admin</button>

                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $key => $val)
                  <tr>
                    <th scope="row">{{ $key + $data->firstItem() }}</th>
                    <td>{{ $val->user->name}}</td>
                    <td>{{ $val->user->username }}</td>
                    <td>{{ $val->user->nip }}</td>
                    <td>
                           <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modaldetailadmin{{ $val->id }}">Detail</a>
                          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaladminedit{{ $val->id }}">Edit</a>

                          <a href="#" class="btn btn-danger delete" data-id="{{ $val->id }}">Delete</a>
                            {{-- <a href="{{ route('admin.delete', ['id' => $val->id]) }}"
                            class="btn btn-danger hapus">Delete</a> --}}

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $data->links() }}

              <!-- End Default Table Example -->
            </div>
        @include('admin.admin.from')
        @include('admin.admin.detail')


          </div>



        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection

@section('scriptJs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "admin/delete/" + id;
                    } else {
                        swal("Batal menghapus akun!");
                    }
                });
        });
    </script>

@endsection
