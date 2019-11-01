<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Finance</h1>
    <p class="mb-4">All of your income,spending , and transaction record history are displayed here</p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Your recent finance record</h5>
                    <dl class="row">
                        <dt class="col-sm-3">Income</dt>
                        <dd class="col-sm-9">: <?php echo "Rp " . number_format($income["SUM(cost)"], 2, ',', '.'); ?></dd>

                        <dt class="col-sm-3">Spending</dt>
                        <dd class="col-sm-9">: <?php echo "Rp " . number_format($spending["SUM(cost)"], 2, ',', '.'); ?></dd>

                        <dt class="col-sm-3">Remain Funds</dt>
                        <dd class="col-sm-9">: <?php echo "Rp " . number_format($store['fund'], 2, ',', '.'); ?></dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Your transaction and Store activity records</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Detail</th>
                            <th>Cost</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Detail</th>
                            <th>Cost</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($history as $his) : ?>
                            <tr>
                                <td><?= $his['name']; ?></td>
                                <td><?= $his['type']; ?></td>
                                <td><?= $his['detail']; ?></td>
                                <td><?php echo "Rp " . number_format($his['cost'], 2, ',', '.'); ?></td>
                                <td><?= date('d F Y', $his['date']); ?></td>

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