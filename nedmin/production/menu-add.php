<?php 
include 'header.php';
include '../netting/baglan.php';
?>

<head>
  <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>

  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Menu</h3>
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
              <h2>Menu Prosesləri <small style="color:MediumSeaGreen;">
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
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Custom</label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select class="select2_single form-control" required name="menu_ust" tabindex="-1">
                          <option></option>

                          <option value="0">Üst Menu</option>

                          <?php 
                          $menusor=$db->prepare("select * from menu where menu_ust=:menu_ust order by menu_sira");
                          $menusor->execute(array(
                            'menu_ust' => 0
                          ));

                          while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
                           ?>

                           <option value="<?php echo $menucek['menu_id']; ?>"><?php echo $menucek['menu_ad']; ?></option>

                         <?php } ?>
                       </select>
                     </div>
                   </div>


                   <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menu Ad <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_ad" placeholder="Menu adını daxil edin..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menu Url <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" name="menu_url" placeholder="Menu adını daxil edin..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menu Info <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea  name="menu_info" class="ckeditor"></textarea>
                    </div>
                  </div>


                  <script>
                    CKEDITOR.replace( 'haqqimizda_menu' );
                  </script>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menu Sira <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_sira" value="0" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menu Status <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="heard" name="menu_status" class="form-control" required>
                        <option value="1">Aktiv</option>
                        <option value="0">Passiv</option>
                      </select>
                    </div>
                  </div>



                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                      <button type="submit" name="menusaxla" class="btn btn-success">Saxla</button>
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

  <script src="../vendors/select2/dist/js/select2.full.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>

  <?php include 'footer.php'; ?>