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
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/store/store.PNG'); ?>" class="card-img mt-2 mb-2" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $store['store_name']; ?></h5>
                                    <dl class="row">
                                        <dt class="col-sm-3">Owner</dt>
                                        <dd class="col-sm-9"><?= $user['name']; ?></dd>

                                        <dt class="col-sm-3">Address</dt>
                                        <dd class="col-sm-9"><?= $store['address']; ?></dd>

                                        <dt class="col-sm-3">Contact</dt>
                                        <dd class="col-sm-9"><?= $store['contact']; ?></dd>

                                        <dt class="col-sm-3 text-truncate">Desc</dt>
                                        <dd class="col-sm-9"><?= $store['description']; ?></dd>

                                        <dt class="col-sm-3 text-truncate">Fund</dt>
                                        <dd class="col-sm-9"><?php echo "Rp " . number_format($store['fund'], 2, ',', '.'); ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?= base_url(); ?>user/edit_store" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->