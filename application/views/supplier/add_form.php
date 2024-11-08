<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Supplier</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active">Tambah Supplier</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('supplier/save') ?>" method="post">
                    <div class="mb-3">
                        <label>NIK<code>*</code></label>
                        <input class="form-control" name="nik" type="text" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama<code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label>Telepon<code>*</code></label>
                        <input class="form-control" name="telp" type="text" placeholder="Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label>Email<code>*</code></label>
                        <input class="form-control" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label>Alamat<code>*</code></label>
                        <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Perusahaan<code>*</code></label>
                        <input class="form-control" name="perusahaan" type="text" placeholder="Perusahaan" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Bank<code>*</code></label>
                        <input class="form-control" name="nama_bank" type="text" placeholder="Nama Bank" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Akun Bank<code>*</code></label>
                        <input class="form-control" name="nama_akun_bank" type="text" placeholder="Nama Akun Bank" required>
                    </div>
                    <div class="mb-3">
                        <label>No. Akun Bank<code>*</code></label>
                        <input class="form-control" name="no_akun_bank" type="text" placeholder="No. Akun Bank" required>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Tambah Supplier</button>
                </form>
            </div>
        </div>
    </div>
</main>
