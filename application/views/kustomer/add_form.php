<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
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
