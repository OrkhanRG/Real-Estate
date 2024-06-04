<?php 
include 'header.php';
include '../netting/baglan.php';

$slidersor=$db->prepare("SELECT * from slider where slider_id=:slider_id");
$slidersor->execute(array(
  'slider_id'=>$_GET['slider_id']
));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Slider</h3>
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
              <div align="left" class="col-md-6">
                <h2>Slider Prosesləri <small style="color:MediumSeaGreen;">
                  <?php 
                  if ($_GET['vəziyyət']=='ok') { ?>

                    <b style="color:MediumSeaGreen;">Parametrlər Yeniləndi</b>

                    <?php 
                  } elseif ($_GET['vəziyyət']=='no') {?>

                    <b style="color:Tomato;">Parametrlər Yenilənmədi</b>

                    <?php } ?></small> </h2>

                  </div>
                  <div align="right" class="col-md-6">
                    <a href="slider.php"><button class="btn btn-warning"><i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-right: 3px;"></i>Geri qayıt</button></a>
                  </div>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">


                  <form action="../netting/proses.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
                    <input type="hidden" name="slider_imgyol" value="<?php echo $slidercek['slider_imgyol']; ?>">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklənən Şəkil <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <img width="250" height="120" src="../../<?php echo $slidercek['slider_imgyol']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şəkil Seçin <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" name="slider_imgyol" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="slider_ad" value="<?php echo $slidercek['slider_ad']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Link <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="slider_link" value="<?php echo $slidercek['slider_link']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Status <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="heard" name="slider_status" class="form-control" required>

                          <?php if ($slidercek['slider_status']==1) {?>

                            <option value="1">Aktiv</option>
                            <option value="0">Passiv</option>

                          <?php } 
                          elseif ($slidercek['slider_status']==0) { ?> 

                            <option value="0">Passiv</option>
                            <option value="1">Aktiv</option>

                          <?php } ?>

                        </select>
                      </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="slideredit" class="btn btn-success">Saxla</button>
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