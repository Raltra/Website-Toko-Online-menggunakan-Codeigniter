<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
            Pengguna
            <a href="#" class="btn btn-sm btn-outline-primary">Tambah</a>
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
                    <th>Pengguna</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach($content as $row): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td>
                    <p>
                        <img src="<?= $row->image ? $row->image : base_url('images/user/default.png') ?>" alt="" height="50"/> <?= $row->name ?>
                    </p>
                    </td>
                    <td class="align-middle"><p><?= $row->email ?></p></td>
                    <td class="align-middle"><p><?= $row->role ?></p></td>
                    <td class="align-middle"><p><?= $row->is_active ? 'Aktif' : 'Tidak Aktif' ?></p></td>
                    <td class="align-middle">
                    <form action="">
                        <a href="" class="btn btn-sm btn-outline-info">
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
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
            <nav aria-label="Page navigation example">
             <?= $pagination ?>
            </nav>
        </div>
        </div>
    </div>
    </div>
</main>