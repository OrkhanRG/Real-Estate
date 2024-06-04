<?php 
include 'header.php';
include '../netting/baglan.php';

$haqqimizdasor=$db->prepare("select * from haqqimizda where haqqimizda_id=?");
$haqqimizdasor->execute(array(0));
$haqqimizdacek=$haqqimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<head>
  <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Haqqımızda</h3>
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
              <h2>Haqqımızda Səhifəsi Redaktə et <small style="color:MediumSeaGreen;">
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


                  <form action="../netting/proses.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Başlığ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="haqqimizda_baslig" value="<?php echo $haqqimizdacek['haqqimizda_baslig']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea  name="haqqimizda_mezmun" class="ckeditor"><?php echo $haqqimizdacek['haqqimizda_mezmun']; ?></textarea>
                      </div>
                    </div>


                    <script>
                      CKEDITOR.replace( 'haqqimizda_mezmun' );
                    </script>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Video <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="haqqimizda_video" value="<?php echo $haqqimizdacek['haqqimizda_video']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Vizyon <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="haqqimizda_vizyon" value="<?php echo $haqqimizdacek['haqqimizda_vizyon']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Missiya <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="haqqimizda_missiya" value="<?php echo $haqqimizdacek['haqqimizda_missiya']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" name="haqqimizdasaxla" class="btn btn-success">Güncəllə</button>
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