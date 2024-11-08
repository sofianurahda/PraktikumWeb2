<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('penjualan/edit') ?>" method="post">
                    
                    <input type="hidden" name="id" value="<?php echo $penjualan->id; ?>" />
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('invoice') ? 'is-invalid':'' ?>"
                            type="text" name="invoice" value="<?php echo $penjualan->invoice; ?>" placeholder="Invoice" required />
                        <label for="invoice">Invoice <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('invoice') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('total') ? 'is-invalid':'' ?>"
                            type="number" name="total" value="<?php echo $penjualan->total; ?>" placeholder="Total" required />
                        <label for="total">Total <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('total') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('bayar') ? 'is-invalid':'' ?>"
                            type="number" name="bayar" value="<?php echo $penjualan->bayar; ?>" placeholder="Bayar" required />
                        <label for="bayar">Bayar <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('bayar') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('kembali') ? 'is-invalid':'' ?>"
                            type="number" name="kembali" value="<?php echo $penjualan->kembali; ?>" placeholder="Kembali" required />
                        <label for="kembali">Kembali <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('kembali') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
                            type="date" name="tanggal" value="<?php echo $penjualan->tanggal; ?>" placeholder="Tanggal" required />
                        <label for="tanggal">Tanggal <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('tanggal') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('kustomer_id') ? 'is-invalid':'' ?>"
                            type="number" name="kustomer_id" value="<?php echo $penjualan->kustomer_id; ?>" placeholder="Kustomer ID" required />
                        <label for="kustomer_id">Kustomer ID <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('kustomer_id') ?>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo form_error('user_id') ? 'is-invalid':'' ?>"
                            type="number" name="user_id" value="<?php echo $penjualan->user_id; ?>" placeholder="User ID" required />
                        <label for="user_id">User ID <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('user_id') ?>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
