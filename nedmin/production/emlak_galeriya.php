<!--  --><?php 

include 'header.php';

// Axtarış çubuğunu aktiv etdikdə bu hissəni aktiv et

// if (isset($_POST['axtar'])) {

//   $axtarilan=$_POST['axtarilan'];

//   $galeriyasor=$db->prepare("select * from galeriya where galeriya_ad LIKE '%$axtarilan%' order by galeriya_status DESC, galeriya_sira ASC limit 25");
//   $galeriyasor->execute();
//   $say=$galeriyasor->rowCount();

// }
// else {

  $galeriyasor=$db->prepare("select * from galeriya where emlak_id=:emlak_id order by galeriya_id DESC limit 25");
  $galeriyasor->execute(array(
    'emlak_id' => $_GET['emlak_id']
  ));
  $say=$galeriyasor->rowCount();

// }

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">

      <div class="title_left">
        <h3>Galeriya</h3>
      </div>

      <!-- Axtarış çubuğu -->

      <!-- <div class="title_right">
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
      </div> -->
    </div>

    

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <div align="left" class="col-md-6">
                <h2>Galeriya Prosesləri<small>
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
                    <a href="emlak_galeriya_add.php?emlak_id=<?php echo $_GET['emlak_id']; ?>"><button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 3px;"></i>Yeni Əlavə et</button></a>
                  </div>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                 <div class="row">

                  <?php 

                  while($galeriyacek=$galeriyasor->fetch(PDO::FETCH_ASSOC)){

                   ?>

                   <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="../../<?php echo $galeriyacek['galeriya_imgyol']; ?>" alt="image" />
                        <div class="mask">
                          <p><?php echo $galeriyacek['galeriya_id']; ?></p>
                          <div class="tools tools-bottom">
                            <a href="../netting/proses.php?galeriyasil=ok&galeriya_id=<?php echo $galeriyacek['galeriya_id']; ?>&emlak_id=<?php echo $_GET['emlak_id']; ?>&galeriya_imgyol=<?php echo $galeriyacek['galeriya_imgyol']; ?>"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <center>TEST</center>
                      </div>
                    </div>
                  </div>
                <?php } ?>

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