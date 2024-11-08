<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Satuan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('satuan') ?>">Satuan</a></li>
            <li class="breadcrumb-item active">Tambah Satuan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('satuan/save') ?>" method="post">
                    <!-- Kolom Nama Satuan -->
                    <div class="mb-3">
                        <label>Nama Satuan <code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Satuan" required>
                    </div>

                    <!-- Kolom Deskripsi -->
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Satuan"></textarea>
                    </div>

                    <!-- Tombol Save -->
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</main>
