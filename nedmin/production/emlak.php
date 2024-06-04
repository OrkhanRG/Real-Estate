<?php 

include 'header.php';

if (isset($_POST['axtar'])) {

  $axtarilan=$_POST['axtarilan'];

  $emlaksor=$db->prepare("select * from emlak where emlak_ad LIKE '%$axtarilan%'  order by emlak_id DESC limit 25");
  $emlaksor->execute();
  $say=$emlaksor->rowCount();

}
else {

  $emlaksor=$db->prepare("select * from emlak order by emlak_tarix DESC limit 25");
  $emlaksor->execute();
  $say=$emlaksor->rowCount();

}

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">

      <div class="title_left">
        <h3></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form action="" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" name="axtarilan" placeholder="Açar sözləri daxil edin...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="axtar">Axtar!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
      
    </div>

    

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <div align="left" class="col-md-6">
                <h2>Əmlak Prosesləri<small>
                  <?php 
                  echo "<b>".$say." qeyd sıralandı</b>";
                  if ($_GET['vəziyyət']=='ok') { ?>

                    <b style="color:MediumSeaGreen;">Proses Uğurlu</b>

                    <?php 
                  } elseif ($_GET['vəziyyət']=='no') {?>

                    <b style="color:Tomato;">Proses Uğursuz</b>

                    <?php } ?></small></h2>
                  </div>  
                  <div align="right" class="col-md-6">
                    <a href="emlak-add.php"><button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 3px;"></i>Yeni Əlavə et</button></a>
                  </div>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">

                          <th class="column-title">Əmlak Foto </th>
                          <th class="column-title text-center">Əmlak Başlığ </th>
                          <th class="column-title text-center">Əmlak Qiymət </th>
                          <th width="80" class="column-title text-center"></th>
                          <th width="80" class="column-title text-center"></th>
                          <th width="80" class="column-title text-center"></th>


                        </tr>
                      </thead>

                      <tbody>

                        <?php 
                        while($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)){

                          $emlak_id=$emlakcek['emlak_id'];
                          ?>


                          <tr>

                            <td><img width="250" height="120" src="../../<?php echo $emlakcek['emlak_imgyol']; ?>"></td>
                            <td class="text-center"><?php echo $emlakcek['emlak_baslig']; ?></td>
                            <td class="text-center"><?php echo $emlakcek['emlak_qiymet']; ?> AZN</td>

                            <td class="text-center"><a href="emlak_galeriya.php?emlak_id=<?php echo $emlakcek['emlak_id']; ?>"><button class="btn btn-warning btn-xs" style="width:90.6px;"><i class="fa fa-image" aria-hidden="true"></i> Galeriya</button></a></td>

                            <td class="text-center"><a href="emlak-edit.php?emlak_id=<?php echo $emlakcek['emlak_id']; ?>"><button class="btn btn-primary btn-xs" style="width:90.6px;"><i class="fa fa-pencil" aria-hidden="true"></i> Redaktə Et</button></a></td>

                            <td class="text-center"><a href="../netting/proses.php?emlak_imgyol=<?php echo $emlakcek['emlak_imgyol']; ?>&emlaksil=ok&emlak_id=<?php echo $emlakcek['emlak_id']; ?>"><button class="btn btn-danger btn-xs" style="width:90.6px;"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px;"></i>Sil</button></a></td>

                          </tr>

                        <?php } ?>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <?php include 'footer.php'; ?>