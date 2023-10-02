              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaltambahadmin" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('admin.save') }}" method="post" autocomplete="off" enctype="multipart/form-data"
                           >
                            @csrf
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control"  
                                    autocomplete="off" @error('name') is-invalid @enderror required>
                          </div>
                          @error('name')
                              <div class="valid-tooltip">
                                  {{ $message }}
                              </div>
                          @enderror


                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control"  
                                    autocomplete="off" @error('username') is-invalid @enderror required>
                          </div>
                           @error('username')
                              <div class="invalid-feddback">
                                  {{ $message }}
                              </div>
                          @enderror

                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">NIP</label>
                            <input type="number"  name="nip" class="form-control"  
                                    autocomplete="off" @error('nip') is-invalid @enderror required>
                          </div>
                          @error('nip')
                              <div class="invalid-feddback">
                                  {{ $message }}
                              </div>
                          @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"  
                                    autocomplete="off" @error('email') is-invalid @enderror required>
                          </div>
                          @error('email')
                              <div class="invalid-feddback">
                                  {{ $message }}
                              </div>
                          @enderror

                           <div class="col-12 mt-3">
                              <label for="inputState" class="form-label">Jenis Kelamin</label>
                              <select name="gender"  class="form-select" required >
                                <option selected>Pilih Gender</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                              </select>
                            </div>


                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"  
                                    autocomplete="off" @error('password') is-invalid @enderror required>
                          </div>
                           @error('password')
                              <div class="invalid-feddback">
                                  {{ $message }}
                              </div>
                          @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control"  
                                    autocomplete="off" @error('password_confirmation') is-invalid @enderror required>
                          </div>
                           @error('password_confirmation')
                              <div class="invalid-feddback">
                                  {{ $message }}
                              </div>
                          @enderror

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
                <div class="modal fade" id="modaladminedit{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('admin.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <input type="hidden" name="id" value="{{ $val->user->id }}">

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name"  class="form-control"  
                                    @error('name') is-invalid @enderror value="{{ $val->user->name }}" required>
                          </div>
                           @error('name')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">User Name</label>
                            <input type="text" name="username"  class="form-control"  
                                  @error('username') is-invalid @enderror value="{{ $val->user->username }}" required>
                          </div>
                          @error('username')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">NIP</label>
                            <input type="number" name="nip"  class="form-control"  
                                   @error('nip') is-invalid @enderror value="{{ $val->user->nip }}" required>
                          </div>
                          @error('nip')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror


                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control"  
                                  @error('email') is-invalid @enderror value="{{ $val->user->email }}" required>
                          </div>
                           @error('email')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          
                           <div class="col-12 mt-3">
                              <label for="inputState" class="form-label">Jenis Kelamin</label>
                              <select name="gender"  class="form-select">
                                <option selected>{{ $val->user->gender }}</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                              </select>
                            </div>
                            
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="password" name="password"  class="form-control"  required>
                          </div>
                          @error('password')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control"  required>
                          </div>
                          @error('password_confirmation')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror
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