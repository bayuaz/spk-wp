            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol "Keluar" di bawah jika ingin mengakhiri sesi anda!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" href="<?= base_url('dashboard/keluar') ?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/template/sb-admin-2/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/template/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/template/sb-admin-2/js/sb-admin-2.min.js') ?>"></script>
    
    <!-- Page level plugins -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <?php if (strtolower($this->uri->uri_string()) == 'kriteria' || strtolower($this->uri->uri_string()) == 'alternatif') : ?>
    <script src="<?= base_url('assets/template/sb-admin-2/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <?php endif; ?>

    <!-- Page level custom scripts -->
    <?php if (strtolower($this->uri->uri_string()) == 'kriteria' || strtolower($this->uri->uri_string()) == 'alternatif') : ?>
    <script src="<?= base_url('assets/template/sb-admin-2/js/demo/datatables-demo.js') ?>"></script>
    <?php endif; ?>
    

    <?php 
    if ($this->session->userdata('success')) {
      echo 
      "<script type='text/javascript'>
        Toastify({
            text: '".$this->session->userdata('success')."',
            duration: 3000,
            style: {
                background: 'linear-gradient(to right, #00b09b, #96c93d)',
            },
        }).showToast();
      </script>";

      $this->session->unset_userdata('success');
    }

    if ($this->session->userdata('failed')) {
        echo 
        "<script type='text/javascript'>
        Toastify({
            text: '".$this->session->userdata('failed')."',
            duration: 3000,
            style: {
                background: 'linear-gradient(to right, #ff5f6d, #ffc371)',
            },
        }).showToast();
      </script>";

      $this->session->unset_userdata('failed');
    }
    ?>
</body>

</html>