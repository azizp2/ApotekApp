<?php include 'page/top.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>
                  </div>
            </div>

      
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Obat<small></small></h2>
                   <div class="clearfix"></div>
                   </div>
                    <div class="x_content">
                  <?php 
                  $query = mysql_query("select * from kategori");
                  ?>
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <table id="" class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1%">No</th>
                          <th width="5%">Kode</th>
                          <th width="25%">Nama Kategori</th>
                          <th width="15%">Aksi</th>

                        </tr>
                      </thead>

                      <?php $no=1; while ($data = mysql_fetch_array($query)) {?>
                  
                      <tbody>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>0000<?php echo $data['kode'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td>
        <a href="e-kat.php?kode=<?php echo $data['kode'] ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
        <a name="hapus" onClick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='kat.php?kode=<?php echo $data['kode']; ?>' }"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash"  ></span></a>
                          </td>

                        <?php } ?>

                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                 </div>
               </div>

           </p>
         </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Obat<small></small></h2>
                   <div class="clearfix"></div>
                   </div>
                    <div class="x_content">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                  
                          <form action="#" class="form-horizontal form-label-left" method="post" >
          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kode Kategori <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" name="kode_kategori" required="required" class="form-control col-md-7 col-xs-12" readonly value="" >
                        </div></div>
            
                        
              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nama Kategori <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="autofocus" name="nama" class="form-control col-md-7 col-xs-12">
                        </div></div>
            
            
                     <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <input type="submit" class="btn btn-dark btn-sm" name="simpan" value="Simpan">
                        </div>
                      </div>

                    </form>


                  </div>
                 </div>
               </div>
           </p>
         </div>

       </div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php'  ?>

<?php if (isset($_POST['simpan'])) { 
    $nama = $_POST['nama']; 

    $ssl = mysql_query("
        INSERT INTO `db_apotek`.`kategori`
            (`kode`,
             `nama`)
        VALUES ('',
                '$nama');


      ");
echo "<script>document.location.href='kat.php';</script>";

    
}
  ?>

  <?php if (isset($_GET['kode'])) { 
    $s = $_GET['kode'];
    $sql = mysql_query("
DELETE
FROM `db_apotek`.`kategori`
WHERE `kode` = '$s';

      ");
echo "<script>document.location.href='kat.php';</script>";
    
}
  ?>






























