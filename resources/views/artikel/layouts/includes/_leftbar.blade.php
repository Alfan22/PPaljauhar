    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CLEANING ART</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu pekerjaan-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-people-carry"></i>
          <span>Data Paket Pekerjaan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/data_paket_pekerjaan')}}">Data Paket Pekerjaan</a>
            <!-- <a class="collapse-item" href="/notfound">Data Order Paket</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu pengguna-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-people-arrows"></i>
          <span>Data Pengguna</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/dataart')}}">Data ART</a>
            <a class="collapse-item" href="{{url('/datamaster')}}">Data Master</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
          <i class="fas fa-handshake"></i>
          <span>Data Order Paket</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/data_order')}}">Data Order Paket</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          <i class="fas fa-tasks"></i>
          <span>Data Pembayaran</span></a>
          <div id="collapsefour" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/verifytransaski')}}">Verifikasi Pembayaran</a>
            <a class="collapse-item" href="{{url('/datatransaksi')}}">Data Pembayaran Sukses</a>
             <a class="collapse-item" href="{{url('/faileddatatransaksi')}}">Data Pembayaran Gagal</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#five" aria-expanded="true" aria-controls="five">
          <i class="fas fa-tasks"></i>
          <span>Data Review</span></a>
          <div id="five" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/datareview')}}">Review ART</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
