<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trading</h1>
    <p class="mb-4">You can manage all your selling and finance record here</p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Available Products to sell<a href="<?= base_url(); ?>user/add_record" class="btn btn-primary float-right">Add other transactions record</a></h6>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Product Id</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price/Unit</th>
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
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>user/sell/<?= $stor['id_product']; ?>" class="btn btn-success">Sell</a>
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