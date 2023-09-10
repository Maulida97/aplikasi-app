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
                        <form action="{{ route('bangsal.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Bangsal</label>
                            <input type="text" name="nama_bangsal" class="form-control" id="inputNanme4" required>
                          </div>
                          
                          <div class="text-center mt-4">
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





     @foreach ($data as $key => $val)         
       {{-- <div class="card"> --}}
              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaledit{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3" action="{{ route('bangsal.save') }}" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{{ $val->id }}">
                            @csrf
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Bangsal</label>
                            <input type="text" name="nama_bangsal" class="form-control" id="inputNanme4" value="{{ $val->nama_bangsal }}" required>
                          </div>
                          <div class="text-center mt-4">
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
      @endforeach       