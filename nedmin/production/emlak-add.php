<?php 
include 'header.php';
include '../netting/baglan.php';
?>

<head>
  <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Əmlak</h3>
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
              <h2>Əmlak Prosesləri <small style="color:MediumSeaGreen;">
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">User <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="user_id" value="<?php echo $_SESSION['user_name']; ?>" placeholder="Əmlak başlığ daxil edin..." class="form-control col-md-7 col-xs-12" readonly>
                        <input type="hidden" id="first-name" required="required" name="user_id" value="<?php echo $user_cek['user_id']; ?>" placeholder="Əmlak başlığ daxil edin..." class="form-control col-md-7 col-xs-12" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Şəkil Seçin <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" required="required" name="emlak_imgyol" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Əmlak Başlığ <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="emlak_baslig" placeholder="Əmlak başlığ daxil edin..." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Əmlak Adres <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="emlak_adres" placeholder="Əmlak adresinizi daxil edin..." class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Əmlak Qiymət <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="emlak_qiymet" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Əmlak Detay <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  name="emlak_detay" class="ckeditor"></textarea>
                      </div>
                    </div>


                    <script>
                      CKEDITOR.replace( 'haqqimizda_mezmun' );
                    </script>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Əmlak Status <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="heard" name="emlak_status" class="form-control" required>
                          <option value="Satılıq">SATILIQ</option>
                          <option value="Kirayə">KİRAYƏ</option>
                        </select>
                      </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="emlaksaxla" class="btn btn-success">Saxla</button>
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