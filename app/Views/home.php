<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header" align="right">
                <a href="<?= site_url('average-income/add') ?>" class="add btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Uang Pembayaran</th>
                        <th>Buruh 1</th>
                        <th>Buruh 2</th>
                        <th>Buruh 3</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $key => $value) : ?>
                    <tr>
                        <td><?=$key + 1?></td>
                        <td><?= date('d F Y', strtotime($value->payment_date)) ?></td>
                        <td>Rp. <?= number_format($value->payment_price,0,',','.') ?></td>
                        <td>Rp. <?= number_format($value->buruh1_price,0,',','.') ?></td>
                        <td>Rp. <?= number_format($value->buruh2_price,0,',','.') ?></td>
                        <td>Rp. <?= number_format($value->buruh3_price,0,',','.') ?></td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
        </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
<?= $this->endSection() ?>