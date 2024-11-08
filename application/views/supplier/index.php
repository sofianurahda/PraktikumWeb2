<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Supplier</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Supplier</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('supplier/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tablesupplier" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Perusahaan</th>
                                <th>Nama Bank</th>
                                <th>Nama Akun Bank</th>
                                <th>No. Akun Bank</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($supplier as $sup) {
                                echo "<tr>
                                    <td>$no</td>
                                    <td>$sup->nik</td>
                                    <td>$sup->name</td>
                                    <td>$sup->telp</td>
                                    <td>$sup->email</td>
                                    <td>$sup->alamat</td>
                                    <td>$sup->perusahaan</td>
                                    <td>$sup->nama_bank</td>
                                    <td>$sup->nama_akun_bank</td>
                                    <td>$sup->no_akun_bank</td>
                                    <td>
                                        <div>
                                            <a href='".base_url('supplier/getedit/' . $sup->id)."' class='btn btn-sn btn-info'><i class='fas fa-edit'></i> Edit</a>
                                            <a href='".base_url('supplier/delete/' . $sup->id)."' class='btn btn-sn btn-danger' onclick='return confirm(\"Ingin menghapus data supplier ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                        </div>
                                    </td>
                                </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
