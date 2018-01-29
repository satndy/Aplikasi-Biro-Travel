
<?php 

include '../../class/admin.php';

$db= new admin();


?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
        </div>

        <div class="modal-body">
        <form action="prosesAdmin.php?aksi=update" method="post" enctype="multipart/form-data">
        <?php
foreach($db->edit($_GET['id']) as $d){
?>
            
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Ganti Foto</label>
                  <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                
                    <input type="file" class="form-control" name="foto">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Username</label>
                  <div class="form-group">
                    <input type="text" name="user_admin" value="<?php echo $d['user_admin'] ?>" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Password</label>
                  <div class="form-group">
                    <input type="text" name="pass_admin" value="<?php echo $d['pass_admin'] ?>" class="form-control" >
                  </div>
                </div>
              
            
                <div class="col-md-6">
                  <label>Level</label>
                  <div class="form-group">
                
                  <p>
                    <input type="radio" name="level" value="1" <?php if ($d['level']=="1") {echo "checked";} ?>>Administrator<br />
               <input type="radio"  name="level" value="2" <?php if ($d['level']=="2") {echo "checked";} ?>>Operator</p>
                  </div>
                </div>
                
                   <div class="col-md-6">
                    <label>Nama</label>
                  <div class="form-group">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control" >
                  </div>
                </div>
                   <input type="submit" value="Simpan" class="btn btn-success">
              </div>

              

              <div class="modal-footer">
          

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>
<?php } ?>
              </form>

           

            </div>

           
        </div>
    </div>

