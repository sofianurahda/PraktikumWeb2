<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('penjualan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Invoice</th>
                                <th>Total</th>
                                <th>Bayar</th>
                                <th>Kembali</th>
                                <th>Tanggal</th>
                                <th>Kustomer ID</th>
                                <th>User ID</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($penjualan as $item) {
                                echo "<tr>
                                    <td>$no</td>
                                    <td>$item->invoice</td>
                                    <td>$item->total</td>
                                    <td>$item->bayar</td>
                                    <td>$item->kembali</td>
                                    <td>$item->tanggal</td>
                                    <td>$item->kustomer_id</td>
                                    <td>$item->user_id</td>
                                    <td>
                                        <div>
                                            <a href=" . base_url('penjualan/getedit/' . $item->id) . " class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
                                            <a href=" . base_url('penjualan/delete/' . $item->id) . " class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data penjualan ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                        </div>
                                    </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
