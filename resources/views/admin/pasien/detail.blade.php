@foreach ($data as $key => $val)         
              <div class="card-body">
                <!-- Vertically centered Modal -->
                <div class="modal fade" id="modaldetailpasien{{ $val->id }}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                          <input type="hidden" name="id" value="{{ $val->id }}">

                         

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