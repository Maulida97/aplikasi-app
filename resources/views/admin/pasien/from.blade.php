              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaltambahpasien" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('pasien.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Bangsal</label>
                            <input type="text" name="bangsal" value="Rawat Inap" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Kamar</label>
                            <input type="text" name="kamar" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">No Tempat Tidur</label>
                            <input type="text" name="no_tempat_tidur" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Penyakit</label>
                            <input type="text" name="penyakit" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Jenis Infus</label>
                            <input type="text" name="jenis_infus" value="Ringer Laktat" class="form-control" id="inputNanme4" required>
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





     @foreach ($data as $key => $val)         
              <div class="card-body">
                <div class="modal fade" id="modalpasienedit{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('pasien.save') }}" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{{ $val->id }}">
                            @csrf
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name" value="{{ $val->name }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Bangsal</label>
                            <input type="text" name="bangsal" value="{{ $val->bangsal }}" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Kamar</label>
                            <input type="text" name="kamar" value="{{ $val->kamar }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">No Tempat Tidur</label>
                            <input type="text" name="no_tempat_tidur" value="{{ $val->no_tempat_tidur }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" value="{{ $val->tanggal }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Penyakit</label>
                            <input type="text" name="penyakit" value="{{ $val->penyakit }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Jenis Infus</label>
                            <input type="text" name="jenis_infus" value="{{ $val->jenis_infus }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                        
                      </div>  
                      
                    </div>
                  </div>
                </div>

              </div>
      @endforeach

@section('script')
        {{-- <script>
           @isset($data)
            var a = $('#gender').val('{{ $data['user']['gender'] }}').toString();
            console.log(a);
            @endisset
        </script> --}}
@endsection