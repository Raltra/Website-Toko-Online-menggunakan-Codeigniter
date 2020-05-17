<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
            Produk
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
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach($content as $row): $no++; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td>
                    <p>
                        <img src="<?= $row->image ? base_url($row->image) : base_url('/images/product/default.png') ?>" alt="" height="50"/>
                        <?= $row->product_title ?>
                    </p>
                    </td>
                    <td class="align-middle">
                    <p>
                        <span class="badge badge-primary"
                        ><i class="fas fa-tags"></i> <?= $row->category_title ?></span
                        >
                    </p>
                    </td>
                    <td class="align-middle"><p>Rp.<?= number_format($row->price, 0, ',', '.') ?></p></td>
                    <td class="align-middle"><p><?= $row->is_available ? "Tersedia" : "Kosong" ?></p></td>
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
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </div>
    </div>
</main>