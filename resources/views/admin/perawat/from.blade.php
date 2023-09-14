              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaltambahperawat" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('perawat.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">NIP</label>
                            <input type="number" name="nip" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                              <label for="inputState" class="form-label">Jenis Kelamin</label>
                              <select name="gender" id="gender" class="form-select">
                                <option selected>Pilih Gender</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                              </select>
                            </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputNanme4" required>
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
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaleditperawat{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('perawat.save') }}" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{{ $val->user->id }}">
                            @csrf
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name" value="{{ $val->user->name }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">User Name</label>
                            <input type="text" name="username" value="{{ $val->user->username }}" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">NIP</label>
                            <input type="number" name="nip" value="{{ $val->user->nip }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $val->user->email }}" class="form-control" id="inputNanme4" required>
                          </div>
                           <div class="col-12 mt-3">
                              <label for="inputState" class="form-label">Jenis Kelamin</label>
                              <select name="gender" id="gender" class="form-select">
                                <option selected>Pilih Gender</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                              </select>
                            </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="password" name="password"  class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                          </div>
                        </form><!-- Vertical Form -->
                        
                      </div>  
                      
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->

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