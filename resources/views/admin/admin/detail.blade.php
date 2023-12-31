@foreach ($data as $key => $val)         
              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaldetailadmin{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Detail Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('admin.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <input type="hidden" name="id" value="{{ $val->user->id }}">
                          
                          <div class=" " id="">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label ">Nama</div>
                                  <div class="col-lg-9 col-md-8">{{ $val->user->name }}n</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Company</div>
                                  <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Job</div>
                                  <div class="col-lg-9 col-md-8">Web Designer</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Country</div>
                                  <div class="col-lg-9 col-md-8">USA</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Address</div>
                                  <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Phone</div>
                                  <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Email</div>
                                  <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                </div>

                              </div>
                          {{-- <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="name"  class="form-control" id="inputNanme4" 
                                    @error('name') is-invalid @enderror value="{{ $val->user->name }}" required enabled>
                          </div>
                           @error('name')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">User Name</label>
                            <input type="text" name="username"  class="form-control" id="inputNanme4" 
                                  @error('username') is-invalid @enderror value="{{ $val->user->username }}" required>
                          </div>
                          @error('username')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                           <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">NIP</label>
                            <input type="number" name="nip"  class="form-control" id="inputNanme4" 
                                   @error('nip') is-invalid @enderror value="{{ $val->user->nip }}" required>
                          </div>
                          @error('nip')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror


                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control" id="inputNanme4" 
                                  @error('email') is-invalid @enderror value="{{ $val->user->email }}" required>
                          </div>
                           @error('email')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          
                           <div class="col-12 mt-3">
                              <label for="inputState" class="form-label">Jenis Kelamin</label>
                              <select name="gender" id="gender" class="form-select">
                                <option selected>{{ $val->user->gender }}</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                              </select>
                            </div>
                            
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="password" name="password"  class="form-control" id="inputNanme4" required>
                          </div>
                          @error('password')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror

                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputNanme4" required>
                          </div>
                          @error('password_confirmation')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                             @enderror --}}


                          <div class="text-center mt-4">
                           <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaladminedit{{ $val->id }}">Edit Admin</a>

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form><!-- Vertical Form -->
                        
                      </div>  
                      
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->

              </div>
      @endforeach       