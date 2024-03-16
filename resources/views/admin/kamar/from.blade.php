   {{-- <div class="card"> --}}
    <div class="card-body">
      <!-- Vertically centered Modal -->
      <div class="modal fade" id="modaltambahkamar" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('kamar.save') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nama Kamar</label>
                  <input type="text" name="nama_kamar" class="form-control" id="inputNanme4" required>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-outline-primary">Submit</button>
                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
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





@foreach ($data as $key => $val)
{{-- <div class="card"> --}}
    <div class="card-body">
      <!-- Vertically centered Modal -->
      <div class="modal fade" id="modalkamaredit{{ $val->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3" action="{{ route('kamar.save') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $val->id }}">
                  @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nama Kamar</label>
                  <input type="text" name="nama_kamar" class="form-control" id="inputNanme4" value="{{ $val->nama_kamar }}" required>
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-outline-primary">Submit</button>
                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
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
@endforeach
