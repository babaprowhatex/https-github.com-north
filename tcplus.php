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
    <h2 class="d-print-none">TcPlus 2023</h2>
    <div class="row">
	<form action="tcplus.jsp" method="post">
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
           <th>Kimlik Tür</th>
           <th>Adı</th>
           <th>Soyadı</th>
           <th>Dogum Tarihi</th>
           <th>Dogum Yeri</th>
           <th>Baba Adı</th>
           <th>Anne Adı</th>
           <th>Cinsiyet</th>
           <th>Din</th>
           <th>Medeni Hal</th>
           <th>Nufus IL</th>
           <th>Nufus ILCE</th>
           <th>Mahalle</th>
           <th>Aile Sıra No</th>
           <th>Cilt No</th>
           <th>Sıra No</th>
           <th>Seri No</th>
        
    </tr>
</thead>
<tbody>
<?php
$tc = $_POST['tc'];
if(isset($_POST['tc'])){
    $response = file_get_contents("https://fearlest.xyz/apiservices/marlexcheck/tcplus.php?auth=marlex&tc=".$tc);
    $decode = json_decode($response, true);
    if(isset($decode['data'])) {
        $address = $decode['data'];
        $adsoyad = $address['Tc'];
        $adsoyad31 = $address['KimlikTür'];
        $dy = $address['Adı'];
        $dt = $address['Soyadı'];
        $adsoyad1 = $address['DogumTarihi'];
        $adsoyad99 = $address['DogumYeri'];
        $dy2 = $address['BabaAdı'];
        $dt3 = $address['AnneAdı'];
        $adsoyad4 = $address['Cinsiyet'];
        $dt34 = $address['Din'];
        $adsoyad44 = $address['MedeniHal'];
        $dt344 = $address['NufusIL'];
        $adsoyad444 = $address['NufusILCE'];
        $adsoyad69 = $address['Mahalle'];
        $dy5 = $address['AileSıraNo'];
        $dt6 = $address['CiltNo'];
        $adsoyad7 = $address['SıraNo'];
        $adsoyad77 = $address['SeriNo'];
        
        $adres = $address['data'];
        ?>
        <tr>
            <td><?= $adsoyad ?></td>
            <td><?= $adsoyad31 ?></td>
              <td><?= $dt ?></td>
              <td><?= $dy ?></td>
              <td><?= $adsoyad1 ?></td>
              <td><?= $adsoyad99 ?></td>
              <td><?= $dy2 ?></td>
              <td><?= $dt3 ?></td>
              <td><?= $adsoyad4 ?></td>
              <td><?= $dt34 ?></td>
              <td><?= $adsoyad44 ?></td>
              <td><?= $dt344 ?></td>
              <td><?= $adsoyad444 ?></td>
              <td><?= $adsoyad69 ?></td>
              <td><?= $dy5 ?></td>
              <td><?= $dt6 ?></td>
              <td><?= $adsoyad7 ?></td>
              <td><?= $adsoyad77 ?></td>
            
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