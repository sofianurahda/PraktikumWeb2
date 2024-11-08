<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Supplier</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active">Edit Supplier</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('supplier/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $supplier->id; ?>" />

                    <div class="mb-3">
                        <label>NIK <code>*</code></label>
                        <input class="form-control" name="nik" type="text" value="<?= $supplier->nik; ?>" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama <code>*</code></label>
                        <input class="form-control" name="name" type="text" value="<?= $supplier->name; ?>" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label>Telepon <code>*</code></label>
                        <input class="form-control" name="telp" type="text" value="<?= $supplier->telp; ?>" placeholder="Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label>Email <code>*</code></label>
                        <input class="form-control" name="email" type="email" value="<?= $supplier->email; ?>" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label>Alamat <code>*</code></label>
                        <textarea class="form-control" name="alamat" placeholder="Alamat" required><?= $supplier->alamat; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Perusahaan <code>*</code></label>
                        <input class="form-control" name="perusahaan" type="text" value="<?= $supplier->perusahaan; ?>" placeholder="Perusahaan" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Bank <code>*</code></label>
                        <input class="form-control" name="nama_bank" type="text" value="<?= $supplier->nama_bank; ?>" placeholder="Nama Bank" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Akun Bank <code>*</code></label>
                        <input class="form-control" name="nama_akun_bank" type="text" value="<?= $supplier->nama_akun_bank; ?>" placeholder="Nama Akun Bank" required>
                    </div>
                    <div class="mb-3">
                        <label>No. Akun Bank <code>*</code></label>
                        <input class="form-control" name="no_akun_bank" type="text" value="<?= $supplier->no_akun_bank; ?>" placeholder="No. Akun Bank" required>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Update Supplier</button>
                </form>
            </div>
        </div>
    </div>
</main>
