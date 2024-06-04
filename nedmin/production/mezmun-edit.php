<?php 
include 'header.php';
include '../netting/baglan.php';

$mezmunsor=$db->prepare("SELECT * from mezmun where mezmun_id=:mezmun_id");
$mezmunsor->execute(array(
  'mezmun_id'=>$_GET['mezmun_id']
));
$mezmuncek=$mezmunsor->fetch(PDO::FETCH_ASSOC);
?>

<head>
  <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Məzmun</h3>
      </div>

      <!-- <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Açar sözünüz...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Axtar!</button>
            </span>
          </div>
        </div>
      </div> -->
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Məzmun Prosesləri <small style="color:MediumSeaGreen;">
                <?php 
                if ($_GET['vəziyyət']=='ok') { ?>

                  <b style="color:MediumSeaGreen;">Parametrlər Yeniləndi</b>

                  <?php 
                } elseif ($_GET['vəziyyət']=='no') {?>

                  <b style="color:Tomato;">Parametrlər Yenilənmədi</b>

                  <?php } ?></small> </h2>
                  <ul class="nav navbar-right panel_toolbox">




                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">


                  <form action="../netting/proses.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklənən Şəkil <span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <img width="250" height="120" src="../../<?php echo $mezmuncek['mezmun_imgyol']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şəkil Seçin <span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="file" id="first-name" required="required" name="mezmun_imgyol" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun Vaxt <span class="required">*</span>
                      </label>

                        <div class="col-md-3">

                         <input type="date" id="first-name" required="required" name="mezmun_tarix" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12"> 

                       </div>

                       <div class="col-md-2">

                        <input type="time" id="first-name" required="required" name="mezmun_saat"  value="<?php echo date('H:i:s'); ?>" class="form-control col-md-7 col-xs-12">

                      </div>

                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun Ad <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="mezmun_ad" value="<?php echo $mezmuncek['mezmun_ad']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea  name="mezmun_detay" class="ckeditor"><?php echo $mezmuncek['mezmun_detay']; ?></textarea>
                    </div>
                  </div>


                  <script>
                    CKEDITOR.replace( 'haqqimizda_mezmun' );
                  </script>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun Keyword <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="mezmun_keyword" value="<?php echo $mezmuncek['mezmun_keyword']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun Status <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="heard" name="mezmun_status" class="form-control" required>
                        <option value="1" <?php if ($mezmuncek['mezmun_status']==1) {
                          echo "selected=\"select\"";
                        } ?>>Aktiv</option>
                        <option value="0" <?php if ($mezmuncek['mezmun_status']==0) {
                          echo "selected=\"select\"";
                        } ?>>Passiv</option>
                      </select>
                    </div>
                  </div>



                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                      <button type="submit" name="mezmunedit" class="btn btn-success">Saxla</button>
                    </div>
                  </div>


                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

  <?php include 'footer.php'; ?>