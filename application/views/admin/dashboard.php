<div class="container ">
    <div class="card shadow mb-4 bg-success">
        <div class="card-header py-3 ">
            <h1 class="h2">Dashboard Admin</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2 ">
                    <button type="button" class="btn btn-sm btn-outline-secondary bg-light"><a href="https://twitter.com/">Share</a></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary bg-light" onclick="window.print()" class="btn btn-danger btn-sm no-print">Export</button>
                </div>
                <input type="date" class="btn btn-sm btn-outline-secondary dropdown-toggle bg-light">
                </input>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <h1 class="display-4">Selamat Datang <?= $user['username']; ?>
                </h1>
                <p class="lead">Aplikasi Pembayaran SPP Sekolah Sederhana SMA N TEGAL</p>
            </div>
        </div>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Jumlah Siswa Aktif</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h3><?php echo $siswa_aktif ?></h3>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-black-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- End of Main Content -->
</main>