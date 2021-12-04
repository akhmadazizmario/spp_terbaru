<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an User!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group"> <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" placeholder="Full Name" value="<?= set_value('nama_lengkap'); ?>">
                                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                            <div class="form-group"> <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                            <div class="form-group"><input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="alamat" value="<?= set_value('alamat'); ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                            <div class="form-group"><input type="text" class="form-control form-control-user" id="nohp" name="nohp" placeholder="nohp" value="<?= set_value('nohp'); ?>">
                                <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                            <div class="form-group"><input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password" value="<?= set_value('password'); ?>">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block"> Register Users </button>
                    </form>
                    <hr>
                    <div class="text-center"> <a class="small" href="forgot-password.html">Forgot Password?</a> </div>
                    <div class="text-center"> <a class="small" href="http://localhost/latihansppwebprogram/auth">Already have an account? Login!</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>