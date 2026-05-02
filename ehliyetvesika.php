<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/user.php'; ?>
<?php require 'inc/_global/token.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $one->get_css('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css'); ?>
<?php $one->get_css('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css'); ?>
<?php $one->get_css('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css'); ?>
<style>
table.table-bordered>tbody>tr>td {
    border: 1px solid #364054;
}

table.table-bordered>tbody>tr>th {
    border: 1px solid #364054;
}
</style>
<div class="content">
<form action="ehliyetvesika.jsp" method="post">
    <h2>-Ehliyet Vesika  Sorgu</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text">TC</span>
                        <input id="tc" name="tc" type="text" class="form-control">
                    </div>
                </div>
                <div class="alert alert-success" style="padding: 15px;">
											Marlex iyi kullanımlar diler.
											</div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                <input class="btn btn-secondary" type="submit" value="Sorgula">
                </div>
            </div>
        </div>
    </div>
    
</form>
<div class="row gx-12">
        <div class="col-xl-12 col-lg-6">
        <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped table-vcenter">

                <thead>
      <tr>
        <th>Vesika</th>
      </tr>
    </thead>
                                    <?php
$tc = $_POST['tc'];
if(isset($_POST['tc'])){
    $response = file_get_contents("https://fearlest.xyz/apiservices/marlexcheck/ehliyet.php?auth=marlex&tc=".$tc);
    $decode = json_decode($response, true);
    $vesika = $decode['data']['Vesika'];
    $img_src = 'data:image/png;base64,' . $vesika; // base64 kodlu fotoğraf verisi
    ?>
    <tr>
        <td><img src="<?= $img_src ?>"></td>
    </tr>
    <?php
}
?>

    </tbody>

                                </table>

                            </div>
</div>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php $one->get_js('js/lib/jquery.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $one->get_js('js/pages/op_auth_signin.min.js'); ?>
<?php require 'inc/_global/views/footer_end.php'; ?>