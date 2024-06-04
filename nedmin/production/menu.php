<?php 

include 'header.php';

if (isset($_POST['axtar'])) {

  $axtarilan=$_POST['axtarilan'];

  $menusor=$db->prepare("select * from menu where menu_ad LIKE '%$axtarilan%'  order by menu_id DESC limit 25");
  $menusor->execute();
  $say=$menusor->rowCount();

}
else {

  $menusor=$db->prepare("select * from menu where menu_ust=:menu_ust order by menu_sira ASC limit 25");
  $menusor->execute(array(
    'menu_ust' => 0
  ));
  $say=$menusor->rowCount();

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
                <h2>Menu Prosesləri<small>
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
                    <a href="menu-add.php"><button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 3px;"></i>Yeni Əlavə et</button></a>
                  </div>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">

                          <th class="column-title">Menu Ad </th>
                          <th class="column-title text-center">Menu Üst </th>
                          <th class="column-title text-center">Menu Sıra </th>
                          <th class="column-title text-center">Menu Status </th>
                          <th width="80" class="column-title text-center"></th>
                          <th width="80" class="column-title text-center"></th>


                        </tr>
                      </thead>

                      <tbody>

                        <?php 
                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){

                          $menu_id=$menucek['menu_id'];
                         ?>


                         <tr>

                          <td><?php echo $menucek['menu_ad']; ?></td>
                          <td class="text-center"><?php echo $menucek['menu_ust']; ?></td>
                          <td class="text-center"><?php echo $menucek['menu_sira']; ?></td>
                          <td class="text-center"><?php 

                          if ($menucek['menu_status']=="1") {
                            echo "Aktiv";
                          }
                          elseif ($menucek['menu_status']=="0") {
                            echo "Passiv";
                          }

                        ?></td>

                        <td class="text-center"><a href="menu-edit.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs" style="width:90.6px;"><i class="fa fa-pencil" aria-hidden="true"></i> Redaktə Et</button></a></td>

                        <td class="text-center"><a href="../netting/proses.php?menusil=ok&menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-danger btn-xs" style="width:90.6px;"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px;"></i>Sil</button></a></td>

                      </tr>

                      <?php 

                      $altmenusor=$db->prepare("select * from menu where menu_ust=:menu_id order by menu_sira ASC limit 25");
                      $altmenusor->execute(array(
                        'menu_id' => $menu_id
                      ));

                      while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)){

                       ?>

                       <tr>

                        <td>----><?php echo $altmenucek['menu_ad']; ?></td>
                        <td class="text-center"><?php echo $altmenucek['menu_ust']; ?></td>
                        <td class="text-center"><?php echo $altmenucek['menu_sira']; ?></td>
                        <td class="text-center"><?php 

                        if ($altmenucek['menu_status']=="1") {
                          echo "Aktiv";
                        }
                        elseif ($altmenucek['menu_status']=="0") {
                          echo "Passiv";
                        }

                      ?></td>

                      <td class="text-center"><a href="menu-edit.php?menu_id=<?php echo $altmenucek['menu_id']; ?>"><button class="btn btn-primary btn-xs" style="width:90.6px;"><i class="fa fa-pencil" aria-hidden="true"></i> Redaktə Et</button></a></td>

                      <td class="text-center"><a href="../netting/proses.php?menusil=ok&menu_id=<?php echo $altmenucek['menu_id']; ?>"><button class="btn btn-danger btn-xs" style="width:90.6px;"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px;"></i>Sil</button></a></td>

                    </tr>

                  <?php } } ?>

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