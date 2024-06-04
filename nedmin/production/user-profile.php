<?php 
include 'header.php';
include '../netting/baglan.php';
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Profile</h3>
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
              <h2><?php echo $user_cek['user_adsoyad'].' profilində dəyişikliklər edirsiniz...';?> <small style="color:MediumSeaGreen;"> 
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Şəkli<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">

                        <?php 
                        if (strlen($user_cek['user_image'])>0) {?>

                          <img width="150" src="../../<?php echo $user_cek['user_image']; ?>">

                        <?php } else{?>

                          <img width="150" src="../../dimg/image-yox.png">

                        <?php } ?>




                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şəkil Seçin <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" name="user_image" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <input type="hidden" name="eski_logo" value="<?php echo $user_cek['user_image']; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_cek['user_id']; ?>">

                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" name="userimgedit" class="btn btn-success">Güncəllə</button>
                    </div>
                  </form>

                  <hr>

                  <form action="../netting/proses.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Ad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="user_name" value="<?php echo $user_cek['user_name']; ?>" class="form-control col-md-7 col-xs-12" disabled>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Ad Soyad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="user_adsoyad" value="<?php echo $user_cek['user_adsoyad']; ?>" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Şifrə <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="first-name" required="required" name="user_password" value="<?php echo $user_cek['user_password']; ?>" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Telefon <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="user_tel" value="<?php echo $user_cek['user_tel']; ?>" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Mail <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="user_mail" value="<?php echo $user_cek['user_mail']; ?>" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <input type="hidden" name="user_id" value="<?php echo $user_cek['user_id']; ?>">

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="userprofilesave" class="btn btn-success">Güncəllə</button>
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