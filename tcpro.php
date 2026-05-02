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
    <h2 class="d-print-none">TcPro 2023</h2>
    <div class="row">
	<form action="tcpro.jsp" method="post">
        <div class="col-md-12">
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <div class="input-group">
                    <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text">TCKN</span>
                        <input id="tc" name="tc" type="text" class="form-control">
                    </div>
                </div>
            </div>


                      
                    </div>
                    <div class="input-group">
                       
                    </div>
                
                </div>
            </div>
         </div>
        <div class="col-md-12">
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <input class="btn btn-secondary" type="submit" id="sorgula" name="yolla" value="Sorgula">
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row gx-12">
        <div class="col-xl-12 col-lg-6">
        <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped table-vcenter">

<thead>
    <tr>
        <th>Tc</th>
           <th>Ad</th>
           <th>Soyad</th>
           <th>Doğum Tarihi</th>
           <th>Baba Adı</th>
           <th>Ana Adı</th>
           <th>Cinsiyet</th>
           <th>Aile Sıra No</th>
           <th>Cilt No</th>
           <th>Sıra No</th>
        
    </tr>
</thead>
<tbody>
<?php
$tc = $_POST['tc'];
if(isset($_POST['tc'])){
    $response = file_get_contents("https://fearlest.xyz/apiservices/marlexcheck/tcpro.php?auth=marlex&tc=".$tc);
    $decode = json_decode($response, true);
    if(isset($decode['data'])) {
        $address = $decode['data'];
        $adsoyad = $address['tc'];
        $dy = $address['ad'];
        $dt = $address['soyad'];
        $adsoyad1 = $address['dogum_tarihi'];
        $dy2 = $address['baba_adı'];
        $dt3 = $address['ana_adı'];
        $adsoyad4 = $address['cinsiyet'];
        $dy5 = $address['ailesira_no'];
        $dt6 = $address['cilt_no'];
        $adsoyad7 = $address['sira_no'];
        
        $adres = $address['data'];
        ?>
        <tr>
            <td><?= $adsoyad ?></td>
              <td><?= $dt ?></td>
              <td><?= $dy ?></td>
              <td><?= $adsoyad1 ?></td>
              <td><?= $dy2 ?></td>
              <td><?= $dt3 ?></td>
              <td><?= $adsoyad4 ?></td>
              <td><?= $dy5 ?></td>
              <td><?= $dt6 ?></td>
              <td><?= $adsoyad7 ?></td>
            
        </tr>
        <?php
    } else {
        echo "Başarısız";
    }
}
?>







</tbody>








												

												
												
                                                

                                                


</tr>
</tbody>
</table>
            </div>
        </div>
    </div>

</div>



<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php $one->get_js('js/lib/jquery.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $one->get_js('js/pages/op_auth_signin.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-buttons/dataTables.buttons.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js'); ?>
  
<?php $one->get_js('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js'); ?>
<?php $one->get_js('js/plugins/datatables-buttons/buttons.print.min.js'); ?>
<?php $one->get_js('js/plugins/datatables-buttons/buttons.html5.min.js'); ?>
<?php require 'inc/_global/views/footer_end.php'; ?>