<div class="page-heading d-flex justify-content-between align-items-center">
    <h1>{{ $title ?? 'Dashboard' }}</h1>

    <button class="btn btn-lg btn-primary fw-semibold shadow-sm px-3 py-2 hover-float" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="fa fa-sign-out-alt me-1"></i> Logout
    </button>
</div>

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