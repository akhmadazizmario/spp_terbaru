<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-warning">Detail user</h5>
                <div class="card-body bg-white">
                    <h5 class="card-title"><?= $user['nama_lengkap']; ?></h5>
                    <p class="card-text"><?= $user['alamat']; ?></p>
                    <p class="card-text"><?= $user['nohp']; ?></p>
                    <p class="card-text"><?= $user['username']; ?></p>
                    <a href="http://localhost/latihansppwebprogram/admin/users" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>