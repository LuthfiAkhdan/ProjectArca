<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success!</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header" align="right">
                <a href="<?= site_url('average-income/add') ?>" class="add btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><i class="fa fa-plus"></i> Tambah Data</a>
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
                            <a href="<?= site_url('average-income/detail/'.$value->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="<?= site_url('average-income/edit/'.$value->id) ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            <!-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
                            <form action="<?= site_url('average-income/delete/'.$value->id) ?>" method="post" class="d-inline" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT">
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
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