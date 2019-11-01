                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <form method="post">
                                <div class="form-group row">
                                    <label for="store_name" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="product_name" value="<?= $product['product_name'] ?>">
                                        <?= form_error('product_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="store_name" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" value="<?= $product['description'] ?>">
                                        <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="store_name" class="col-sm-2 col-form-label">Stock</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="stock" value="<?= $product['stock'] ?>">
                                        <?= form_error('stock', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="store_name" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" value="<?= $product['price'] ?>">
                                        <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>



                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->