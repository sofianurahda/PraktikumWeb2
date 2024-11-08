<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Satuan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('satuan') ?>">Satuan</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('satuan/update/' . $satuan->id) ?>" method="post">
                    <div class="mb-3">
                        <label>ID</label>
                        <input class="form-control" type="text" name="id" value="<?php echo $satuan->id; ?>" readonly />
                    </div>
                    <div class="mb-3">
                        <label>Name <code>*</code></label>
                        <input class="form-control" type="text" name="name" value="<?php echo $satuan->name; ?>" required />
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi <code>*</code></label>
                        <textarea class="form-control" name="deskripsi" required><?php echo $satuan->deskripsi; ?></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
