<div class="container">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">ubah Users</h6>
        </div>
        <div class="card-body bg-info">
            <div class="table-responsive">
                <table class="table table-bordered bg-white" id="dataTable" width="100%" cellspacing="0">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md">
                                    <?= form_open(''); ?>
                                    <input type="hidden" name="id_user" value="<?= $users['id_user']; ?>" readonly>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $users['nama_lengkap']; ?>">
                                        <small class="muted text-danger"><?= form_error('nama'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" value="<?= $users['username']; ?>">
                                        <small class="muted text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $users['alamat']; ?>">
                                        <small class="muted text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">no.hp</label>
                                        <input type="text" name="nohp" id="nohp" class="form-control" value="<?= $users['nohp']; ?>">
                                        <small class="muted text-danger"><?= form_error('nohp'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                        <small class="muted text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?= base_url('admin/users'); ?>" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-dark">Ubah</button>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>