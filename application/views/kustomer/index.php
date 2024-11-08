<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('kustomer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tableKustomer" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kustomer as $k) {
                                echo "<tr>
                                    <td>$no</td>
                                    <td>$k->nik</td>
                                    <td>$k->name</td>
                                    <td>$k->telpon</td>
                                    <td>$k->alamat</td>
                                    <td>
                                        <div>
                                            <a href='" . base_url('kustomer/getedit/' . $k->id) . "' class='btn btn-sn btn-info'><i class='fas fa-edit'></i> Edit</a>
                                            <a href='" . base_url('kustomer/delete/' . $k->id) . "' class='btn btn-sn btn-danger' onclick='return confirm(\"Ingin menghapus data kustomer ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                        </div>
                                    </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Add Kustomer Form -->
                <form action="<?php echo site_url('kustomer/save') ?>" method="post">
                    <div class="mb-3">
                        <label>NIK<code>*</code></label>
                        <input class="form-control" name="nik" type="text" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Kustomer<code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Kustomer" required>
                    </div>
                    <div class="mb-3">
                        <label>Telepon<code>*</code></label>
                        <input class="form-control" name="telpon" type="text" placeholder="Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label>Alamat<code>*</code></label>
                        <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
