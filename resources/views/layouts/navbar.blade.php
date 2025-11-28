<nav class="navbar navbar-main navbar-expand-lg px-4 mx-4 shadow-lg border-radius-xl bg-gradient-primary" id="navbarBlur" data-scroll="false" style="transition: all 0.4s ease;">
  <div class="container-fluid py-2 px-3">
    
    <!-- 🧭 Breadcrumb -->
    <nav aria-label="breadcrumb" class="d-none d-md-block">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 text-white-50">
        <li class="breadcrumb-item text-sm"><a class="opacity-7 text-white" href="#">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
    </nav>

    <!-- 🔍 Search Bar -->
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group" style="max-width: 250px;">
          <span class="input-group-text bg-white border-0 text-body shadow-sm">
            <i class="fas fa-search"></i>
          </span>
          <input type="text" class="form-control border-0 shadow-sm" placeholder="Type here...">
        </div>
      </div>

      <!-- 👤 User, Settings, Notification, Logout -->
      <ul class="navbar-nav justify-content-end align-items-center gap-3">

        <!-- User -->
        <li class="nav-item d-flex align-items-center">
          <a href="#" class="nav-link text-white font-weight-bold px-2 d-flex align-items-center gap-2 hover-float">
            <i class="fa fa-user-circle fa-lg"></i>
            <span class="d-sm-inline d-none">Hi, Admin</span>
          </a>
        </li>

        <!-- Settings -->
        <li class="nav-item d-flex align-items-center">
          <a href="#" class="nav-link text-white p-0 hover-float">
            <i class="fa fa-cog fa-lg cursor-pointer"></i>
          </a>
        </li>

        <!-- Notifications -->
        <li class="nav-item dropdown">
          <a href="#" class="nav-link text-white p-0 hover-float" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell fa-lg"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-3 animate__animated animate__fadeInUp" aria-labelledby="dropdownMenuButton">
            <li class="dropdown-header text-center fw-bold text-secondary">Notifications</li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="#">
                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm rounded-circle">
                <div>
                  <strong>New message</strong> from Laur<br>
                  <small class="text-muted"><i class="fa fa-clock me-1"></i>13 min ago</small>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- 🔒 Logout Button -->
        <li class="nav-item">
          <button class="btn btn-sm btn-light text-primary fw-semibold shadow-sm px-3 py-2 hover-float" data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class="fa fa-sign-out-alt me-1"></i> Logout
          </button>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- 🧊 Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header bg-gradient-primary text-white rounded-top-4">
        <h5 class="modal-title fw-bold" id="logoutModalLabel"><i class="fa fa-sign-out-alt me-2"></i>Konfirmasi Logout</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center py-4">
        <i class="fa fa-question-circle fa-3x text-primary mb-3"></i>
        <h5 class="fw-semibold mb-2">Yakin ingin keluar?</h5>
        <p class="text-muted mb-0">Pastikan semua pekerjaan telah disimpan sebelum keluar dari sistem.</p>
      </div>

      <div class="modal-footer justify-content-center border-0 pb-4">
        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>

        <!-- Laravel logout form -->
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-danger px-4">
            <i class="fa fa-sign-out-alt me-1"></i> Keluar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- 🎨 Style Tambahan -->
<style>
/* Hover efek lembut */
.hover-float {
  transition: all 0.3s ease;
}
.hover-float:hover {
  transform: translateY(-3px);
  color: #ffd35a !important;
}

/* Hover animasi rotasi */
.hover-rotate:hover {
  transform: rotate(90deg);
  transition: all 0.4s ease;
}

/* Animasi dropdown */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate__fadeInUp { animation: fadeInUp 0.4s ease-in-out; }

/* Modal smooth pop */
.modal-content {
  animation: popup 0.4s ease-in-out;
}
@keyframes popup {
  from { transform: scale(0.95); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
</style>
