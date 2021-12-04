<div class="container">
  <h1 class="h2"><?= $title; ?></h1>
  <hr>
  <div class="row mb-2">
    <div class="col-md-6">
      <button type="button" class="btn btn-danger mb-2 tombolTambahGuru" data-toggle="modal" data-target="#formModalGuru">
        <i class="fas fa-plus"></i> Tambah Data Guru
      </button>
      <?= $this->session->flashdata('pesans1'); ?>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control bg-white" placeholder="Cari Data Guru... " name="keyword">
          <button class="btn btn-danger" type="submit">Cari</button>
        </div>
    </div>
  </div>
  <br>
  <div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark">
      <h6 class="m-0 font-weight-bold text-white">Data Guru</h6>
    </div>
    <div class="card-body bg-info">
      <div class="table-responsive">
        <table class="table table-bordered bg-white" id="dataTable" width="100%" cellspacing="0">
          <thead bgcolor="yellow">
            <tr>
              <td>No</td>
              <td>Nama Guru</td>
              <td><i class="fas fa-cogs"></i></td>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($guru as $g) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $g['nama_guru']; ?></td>
                <td>
                  <a href="<?= base_url('admin/guru/ubahGuru/') . $g['id_guru']; ?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="<?= base_url('admin/guru/hapus/') . $g['id_guru']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="formModalGuru" tabindex="-1" aria-labelledby="formModalLabelGuru" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModalLabelGuru">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?= form_open('admin/guru'); ?>
                <input type="text" name="id_guru" id="id_guru">
                <div class="form-group">
                  <label for="nama">Nama Guru</label>
                  <input type="text" name="nama" id="nama" class="form-control">
                  <small class="muted text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
                <?= form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>