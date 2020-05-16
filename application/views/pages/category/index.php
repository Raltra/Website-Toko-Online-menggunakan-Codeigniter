<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
      <div class="container">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header">
                Kategori
                <a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-outline-primary">Tambah</a>
                <div class="float-right">
                  <form action="">
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control form-control-sm text-center"
                        placeholder="Cari"
                      />
                      <div class="input-group-append">
                        <button
                          class="btn btn-sm btn-outline-secondary"
                          type="submit"
                          id="button-addon2"
                        >
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach($content as $row): ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row->title ?></td>
                      <td><?= $row->slug ?></td>
                      <td class="align-middle">
                        <form action="">
                          <a href="<?= base_url('category/edit/'.$row->id) ?>" class="btn btn-sm btn-outline-info">
                            <i class="fas fa-edit"></i>
                          </a>
                          <button
                            type="submit"
                            class="btn btn-sm btn-outline-danger"
                          >
                            <i class="fas fa-eraser"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    <?php $i++; endforeach ?>
                  </tbody>
                </table>

                <nav aria-label="Page navigation example">
                  <?= $pagination ?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>