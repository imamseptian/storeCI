<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">This table below is showing every products that exist in your store storage</p>
    <a href="<?= base_url(); ?>user/add_product" class="btn btn-primary mb-3">Add Product</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Storage</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price/Unit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Product Id</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price/Unit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($storage as $stor) : ?>
                            <tr>
                                <td><?= $stor['id_product']; ?></td>
                                <td><?= $stor['product_name']; ?></td>
                                <td><?= $stor['stock']; ?></td>
                                <td><?php echo "Rp " . number_format($stor['price'], 2, ',', '.'); ?></td>
                                <td><?= $stor['status']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>user/detail/<?= $stor['id_product']; ?>" class="btn btn-primary">Detail</a>
                                    <a href="<?= base_url(); ?>user/edit_product/<?= $stor['id_product']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url(); ?>user/delete/<?= $stor['id_product']; ?>" class="btn btn-danger" onclick="return confirm('Delete <?= $stor['product_name']; ?> from product list?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->