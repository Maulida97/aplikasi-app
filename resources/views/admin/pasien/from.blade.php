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
                            <input type="text" name="nama_pasien" class="form-control" id="inputNanme4" required>
                          </div>

                          <div class="col-12 mt-3">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select name="gender"  class="form-select" required >
                              <option selected>Pilih Gender</option>
                              <option value="pria">Pria</option>
                              <option value="wanita">Wanita</option>
                            </select>
                          </div>
                       
                          <div class="col-12 mt-3">
                            <label for="inputState" class="form-label">Kamar</label>
                            <select name="kamar_id"  class="form-select">
                              <option selected>Pilih Kamar</option>
                              @foreach ($kamar as $key => $value)
                              <option value="{{ $value->id }}">{{ $value->nama_kamar }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-12 mt-3">
                            <label for="inputState" class="form-label">Status Kamar</label>
                            <select name="status"  class="form-select" required >
                              <option selected>Pilih Status</option>
                              <option value="ya">Ya</option>
                              <option value="tidak">Tidak</option>
                            </select>
                          </div>

                          <div class="col-12 mt-3">
                            <label for="inputState" class="form-label">Sensor</label>
                            <select name="sensor_id"  class="form-select">
                              <option selected>Pilih Sensor</option>
                              @foreach ($sensor as $key => $value)
                              <option value="{{ $value->id }}">{{ $value->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                         
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="inputNanme4" required>
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
                            <input type="text" name="name" value="{{ $val->nama_pasien }}" class="form-control" id="inputNanme4" required>
                          </div>
                          <div class="col-12 mt-3">
                          <label for="inputState" class="form-label">Jenis Kelamin</label>
                          <select name="gender"  class="form-select" required >
                            <option selected>{{ $val->gender }}</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                          </select>
                        </div>
                        <div class="col-12 mt-3">
                          <label for="inputState" class="form-label">Kamar</label>
                          <select name="kamar_id"  class="form-select">
                            {{-- <option selected>{{ $val->nama_kamar }}</option> --}}
                            @foreach ($kamar as $key )
                            <option value="{{ $key->id }}"
                              @if ($key->id == $key->kamar_id) selected="selected" @endif>
                              {{ ucfirst($key->nama_kamar) }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-12 mt-3">
                          <label for="inputState" class="form-label">Sensor</label>
                          <select name="sensor_id"  class="form-select">
                            @foreach ($sensor as $key )
                            <option value="{{ $key->id }}"
                              @if ($key->id == $key->sensor_id) selected="selected" @endif>
                              {{ ucfirst($key->nama) }}
                            </option>
                            @endforeach
                           
                          </select>
                        </div>
                     
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" value="{{ $val->tanggal }}" class="form-control" id="inputNanme4" required>
                          </div>
                        
                          <div class="col-12 mt-3">
                            <label for="inputNanme4" class="form-label">Jenis Infus</label>
                            <input type="text" name="jenis_infus" value="Ringer Laktat" value="{{ $val->jenis_infus }}" class="form-control" id="inputNanme4" required>
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

