                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Your Store Profile</h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?= form_open_multipart('user/edit_store'); ?>
                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Store Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="store_name" value="<?= $store['store_name']; ?>">
                                    <?= form_error('store_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" value="<?= $store['address']; ?>">
                                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact" value="<?= $store['contact']; ?>">
                                    <?= form_error('contact', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description" value="<?= $store['description']; ?>">
                                    <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Fund</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fund" value="<?= $store['fund']; ?>" readonly>
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