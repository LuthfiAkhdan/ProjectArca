<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tgl_pembayaran" name="payment_date" value="<?= date('d F Y', strtotime($result->payment_date)) ?>" placeholder="Masukkan Tanggal" disabled>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Pembayaran</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control rupiah-format" id="pembayaran" name="payment_price" value="<?= number_format($result->payment_price,0,',','.') ?>" placeholder="Dalam Rupiah" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="buruh1_percent">Buruh A</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="buruh1_percent" name="buruh1_percent" value="<?= $result->buruh1_percent ?>" placeholder="0 - 100" min="1" max="100" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="buruh1_price" name="buruh1_price" value="<?= number_format($result->buruh1_price,0,',','.') ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="buruh2_percent">Buruh B</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="buruh2_percent" name="buruh2_percent" value="<?= $result->buruh2_percent ?>" placeholder="0 - 100" min="1" max="100" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="buruh2_price" name="buruh2_price" value="<?= number_format($result->buruh2_price,0,',','.') ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="buruh3_percent">Buruh C</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="buruh3_percent" name="buruh3_percent" value="<?= $result->buruh3_percent ?>" placeholder="0 - 100" min="1" max="100" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="buruh3_price" name="buruh3_price" value="<?= number_format($result->buruh3_price,0,',','.') ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a type="" href="<?= site_url('average-income') ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script>
        var status = "complete";
        $(document).ready(function(){
            $("#tgl_pembayaran").datepicker({
                todayBtn: 1,
                autoclose: true,
                format: "dd MM yyyy",
                clearBtn: true,
            });

            $('.rupiah-format').mask('000.000.000', {reverse: true});

            $("#pembayaran").keyup(function(e) {
                checkPrice();
            });
            $("#buruh1_percent").keyup(function(e) {
                checkPrice();
            });
            $("#buruh2_percent").keyup(function(e) {
                checkPrice();
            });
            $("#buruh3_percent").keyup(function(e) {
                checkPrice();
            });

            function checkPrice() {
                let persen_a, persen_b, persen_c, price, persen_max, payment;
                persen_a = $("#buruh1_percent").val();
                persen_b = $("#buruh2_percent").val();
                persen_c = $("#buruh3_percent").val();
                price    = $("#pembayaran").val();
                persen_max = parseInt(persen_a) + parseInt(persen_b) + parseInt(persen_c);
                if (persen_max == 100) {
                    if (price != "") {
                        payment = parseInt(price.replaceAll('.',''));
                        price_a = (parseInt(persen_a) / persen_max) * payment;
                        price_b = (parseInt(persen_b) / persen_max) * payment;
                        price_c = (parseInt(persen_c) / persen_max) * payment;
                        $('#buruh1_price').val(Math.round(price_a).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
                        $('#buruh2_price').val(Math.round(price_b).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
                        $('#buruh3_price').val(Math.round(price_c).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
                        status = "complete";
                    } else {
                        status = "kosong";
                        $('#buruh1_price').val("");
                        $('#buruh2_price').val("");
                        $('#buruh3_price').val("");
                    }
                } else if (persen_max < 100) {
                    status = "kekurangan";
                    $('#buruh1_price').val("");
                    $('#buruh2_price').val("");
                    $('#buruh3_price').val("");
                } else if (persen_max > 100) {
                    status = "kelebihan";
                    $('#buruh1_price').val("");
                    $('#buruh2_price').val("");
                    $('#buruh3_price').val("");
                } else {
                    status = "belum";
                    $('#buruh1_price').val("");
                    $('#buruh2_price').val("");
                    $('#buruh3_price').val("");
                }
            }
        });

        function submitData() {
            if (status == 'kelebihan') {
                alert('Persentase melebihi 100%!');
            } else if (status == 'kekurangan') {
                alert('Persentase kurang dari 100%!');
            } else if (status == 'kekurangan') {
                alert('Persentase kurang dari 100%!');
            } else if (status == 'complete') {
                if ($("#tgl_pembayaran").val() != "") {
                    document.getElementById("sumbit_form").submit();
                    return false;
                } else {
                    alert('Tanggal Pembayaran belum diisi!');
                }
            } else if (status == 'kosong') {
                alert('Pembayaran masih belum diisi!');
            } else {
                alert('Mohon pastikan semua terisi!');
            }
        }
    </script>
<?= $this->endSection() ?>