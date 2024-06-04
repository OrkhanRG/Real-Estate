<?php 

include 'header.php';


?>






<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
<div class="title_left">
        <h3>Galeriya</h3>
      </div>

    </div>

    <div class="col-md-12">
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

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Çoxlu şəkil yüklə</h2>

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <p>Yüklənəcək şəkillərin olduğu qovluğa keçib, hamısını birdən seçib yükləyə bilərsiniz.</p>
                      <form action="../netting/galeriya.php" class="dropzone" >
                        <input type="hidden" name="emlak_id" value="<?php echo $_GET['emlak_id'] ?>">
                      </form>
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                    </div>
                  </div>
                </div>
              </div>
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
