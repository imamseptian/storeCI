<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Set Your Store Before Starting</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url() ?>user/set_store">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="sName" name="sName" placeholder="Store Name" value="<?= set_value('sName'); ?>">
                                <?= form_error('sName', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Store Address" value="<?= set_value('address'); ?>">
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="contact" name="contact" placeholder="Store Contact" value="<?= set_value('contact'); ?>">
                                <?= form_error('contact', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="description" name="description" placeholder="Description" value="<?= set_value('description'); ?>">
                                <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="description" name="fund" placeholder="Starting Fund" value="<?= set_value('fund'); ?>">
                                <?= form_error('fund', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Submit
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>