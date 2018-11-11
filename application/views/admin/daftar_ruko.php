<link href="<?= base_url('assets') ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daftar Ruko</h2>
                </div>
                <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Foto</th>
                                <th style="text-align: center;">Ruko</th>
                                <th style="text-align: center;">Biaya Sewa</th>
                                <th style="text-align: center;">Luas Bangunan</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($ruko as $row): ?>
                                <?php  
                                    $foto = array_values(array_diff(scandir($upload_dir . $row->id_ruko), ['.', '..']));
                                ?>
                                <tr>
                                    <td align="middle" style="vertical-align: middle;">
                                        <img src="<?= count($foto) > 0 ? base_url('assets/foto/ruko-' . $row->id_ruko . '/' . $foto[0]) : 'http://placehold.it/100' ?>" width="100" height="100">
                                    </td>
                                    <td align="middle" style="vertical-align: middle;"><?= $row->ruko ?></td>
                                    <td align="middle" style="vertical-align: middle;"><?= 'Rp. ' . number_format($row->biaya_sewa, 2, ',', '.') ?></td>
                                    <td align="middle" style="vertical-align: middle;"><?= $row->luas_bangunan ?></td>
                                    <td align="middle" style="vertical-align: middle;">
                                        <?php if ($row->status == 'Verified'): ?>
                                            <button class="btn btn-success" onclick="verify('<?= $row->id_ruko ?>', this)"><i class="fa fa-check"></i> Verified</button>
                                        <?php else: ?>
                                            <button class="btn btn-warning" onclick="verify('<?= $row->id_ruko ?>', this)">Pending</button>
                                        <?php endif; ?>
                                        <a href="<?= base_url('admin/detail-ruko/' . $row->id_ruko) ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTables -->
<script src="<?= base_url('assets') ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/vendors/datatables.net-fixedheader/js/datatables.fixedHeader.min.js') ?>"></script>

<script type="text/javascript">
    function verify(id_ruko, obj) {
        $.ajax({
            url: '<?= base_url('admin/verifikasi-ruko') ?>',
            type: 'POST',
            data: {
                verify: true,
                id_ruko: id_ruko
            },
            success: function(response) {
                let json = $.parseJSON(response);
                if (json.status == 'success') {
                    if (json.data == 'Verified') {
                        $(obj).removeClass('btn-warning').addClass('btn-success').html('<i class="fa fa-check"></i> Verified');
                    } else {
                        $(obj).removeClass('btn-success').addClass('btn-warning').html('Pending');
                    }
                }
            },
            error: function(error) { console.log(error.responseText); }
        });
    }
</script>