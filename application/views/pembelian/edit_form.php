<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('pembelian') ?>">Pembelian</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('pembelian/edit') ?>" method="post">
                    
                    <input type="hidden" name="id" value="<?= $pembelian->id; ?>" required />

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('invoice') ? 'is-invalid':'' ?>"
                        type="text" name="invoice" value="<?= $pembelian->invoice; ?>" placeholder="Invoice" required />
                        <label for="invoice">Invoice <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('invoice') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('total') ? 'is-invalid':'' ?>"
                        type="number" name="total" value="<?= $pembelian->total; ?>" placeholder="Total" required />
                        <label for="total">Total <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('total') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('bayar') ? 'is-invalid':'' ?>"
                        type="number" name="bayar" value="<?= $pembelian->bayar; ?>" placeholder="Bayar" required />
                        <label for="bayar">Bayar <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('bayar') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
                        name="deskripsi" placeholder="Deskripsi" required><?= $pembelian->deskripsi; ?></textarea>
                        <label for="deskripsi">Deskripsi <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('deskripsi') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
                        type="date" name="tanggal" value="<?= $pembelian->tanggal; ?>" placeholder="Tanggal" required />
                        <label for="tanggal">Tanggal <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('tanggal') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('suplier_id') ? 'is-invalid':'' ?>"
                        type="number" name="suplier_id" value="<?= $pembelian->suplier_id; ?>" placeholder="Suplier ID" required />
                        <label for="suplier_id">Suplier ID <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('suplier_id') ?>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('user_id') ? 'is-invalid':'' ?>"
                        type="number" name="user_id" value="<?= $pembelian->user_id; ?>" placeholder="User ID" required />
                        <label for="user_id">User ID <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('user_id') ?>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
