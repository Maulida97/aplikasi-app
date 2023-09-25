 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item" data-bs-target="#components-nav" data-bs-toggle="collapse">
             <a class="nav-link collapsed" href="dashboard">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

       

         <li class="nav-heading">Pages</li>

           <li class="nav-item collapsed">
             <a class="nav-link collapsed {{checkRouteActive('pasien')}}" href="{{url('pasien')}}">
                 <i class="bi bi-person" ></i>
                 <span>Pasien</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item collapsed">
             <a class="nav-link collapsed {{checkRouteActive('perawat')}}" href="{{url('perawat')}}">
                 <i class="bi bi-person" ></i>
                 <span>Perawat</span>
             </a>
         </li><!-- End Profile Page Nav -->

          <li class="nav-item collapsed">
             <a class="nav-link collapsed {{checkRouteActive('admin')}}" href="{{url('admin')}}">
                 <i class="bi bi-person" ></i>
                 <span>Admin</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-heading">Master Data</li>

         {{-- <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('kamar')}}" href="{{url('kamar')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Kamar</span>
              </a>
          </li><!-- End Profile Page Nav --> --}}

          {{-- <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('bangsal')}}" href="{{url('bangsal')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Bangsal</span>
              </a>
          </li><!-- End Profile Page Nav --> --}}

          {{-- <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('penyakit')}}" href="{{url('penyakit')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Penyakit</span>
              </a>
          </li><!-- End Profile Page Nav --> --}}
          
          <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('')}}" href="{{url('')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Tes</span>
              </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('alat')}}" href="{{url('alat')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Alat</span>
              </a>
          </li><!-- End Profile Page Nav -->

          {{-- <li class="nav-item collapsed">
              <a class="nav-link collapsed {{checkRouteActive('jamDinas')}}" href="{{url('jamDinas')}}">
                  <i class="ri-database-2-fill" ></i>
                  <span>Jam Dinas</span>
              </a>
          </li><!-- End Profile Page Nav --> --}}





         <li class="nav-heading">_____________________________________</li>

         <li class="nav-item collapsed">
             <a href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                 class="nav-link collapsed {{ checkRouteActive('logout') }}">
                 <i class="ri-logout-box-line"></i>
                 <span>Keluar</span>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                     @csrf
                 </form>
             </a>
         </li>



     </ul>

 </aside><!-- End Sidebar-->
 @php
     function checkRouteActive($route)
     {
         if (Route::current()->uri == $route) {
             return 'active';
         }
     }
 @endphp
