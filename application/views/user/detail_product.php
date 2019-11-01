                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Store</h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product['product_name']; ?></h5>
                                    <dl class="row">
                                        <dt class="col-sm-3">Description</dt>
                                        <dd class="col-sm-9">: <?= $product['description']; ?></dd>

                                        <dt class="col-sm-3">Stock</dt>
                                        <dd class="col-sm-9">: <?= $product['stock']; ?></dd>

                                        <dt class="col-sm-3">Price/unit</dt>
                                        <dd class="col-sm-9">: <?php echo "Rp " . number_format($product['price'], 2, ',', '.'); ?></dd>

                                        <dt class="col-sm-3 text-truncate">Status</dt>
                                        <dd class="col-sm-9">: <?= $product['status']; ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?= base_url(); ?>user/storage" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
                    <a href="<?= base_url(); ?>user/edit_product/<?= $product['id_product']; ?>" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->