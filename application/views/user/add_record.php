                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Other Transaction Record</h1>

                    <div class="row">
                        <div class="col-lg-10">
                            <?= form_open_multipart('user/add_record'); ?>
                            <div class="form-group row">
                                <label for="record_name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="record_name" value="<?= set_value('record_name'); ?>">
                                    <?= form_error('record_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Detail</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="detail" value="<?= set_value('detail'); ?>">
                                    <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Cost</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="cost" value="<?= set_value('cost'); ?>">
                                    <?= form_error('cost', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="type">
                                        <option value="Income">Income</option>
                                        <option value="Spending">Spending</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">

                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Add this record ?')">Add Record</button>
                                    <small class="text-danger pl-3">Warning, you cant edit this record in the future, so please make sure your record is correct</small>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->