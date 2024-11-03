<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo site_url('barang') ?>">Barang</a></li>
        <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barkode</th>
                                <th>Name</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga beli</th>
                                <th>Harga Jual</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            foreach ($barang as $barang) {
                                echo "<tr>
                                    <td>$no</td>
                                    <td>$barang->barkode</td>
                                    <td>$barang->name</td>
                                    <td>$barang->satuan</td>
                                    <td>$barang->kategori</td>
                                    <td>$barang->stok</td>
                                    <td>$barang->harga_beli</td>
                                    <td>$barang->harga_jual</td>
                                    <td>
                                    <div>
                                    <a href=".base_url('barang/getedit/' . $barang->id)." class='btn btn-sn btn-info'><i class='fas fa-edit'></i> Edit</a>
                                    <a href=".base_url('barang/delete/' . $barang->id)." class='btn btn-sn btn-danger'
                                    onclick='return confirm(\Ingin menghapus data user ini?\");><i class='fas fa-trash'></i> Hapus</a>
                                    </div>
                                    </td>
                                </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <form action="<?php echo site_url('barang/save') ?>" method="post" >
                    <div class="mb-3">
                        <label>Barkode<code>*</code></label>
                        <input class="form-control" name="barkode" type="text" placeholder="Barkode">
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang<code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli<code>*</code></label>
                        <input class="form-control" name="harga_beli" type="text" placeholder="Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual<code>*</code></label>
                        <input class="form-control" name="harga_jual" type="text" placeholder="Harga Jual">
                    </div>
                    <div class="mb-3">
                        <label>Kategori<code>*</code></label>
                        <select name="kategori" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($kategori as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                                <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Satuan <code>*</code></label>
                        <select name="satuan" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($satuan as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Supplier <code>*</code></label>
                        <select name="supplier" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($supplier as $k):?>
                                <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label >Stok</label>
                        <input class="form-control" name="stok" type="text" placeholder="Stok">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>Save</button>
                </form>