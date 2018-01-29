
<?php 

include '../../class/user.php';

$db= new user();


?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
        </div>

        <div class="modal-body">
        <form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
        <?php
foreach($db->edit($_GET['id_user']) as $d){
?>
            
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Ganti Foto</label>
                  <input type="hidden" name="id_user" value="<?php echo $d['id_user'] ?>">
                  <input type="hidden" name="foto" value="<?php echo $d['foto'] ?>">
                    <input type="file" class="form-control" name="foto">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Nama</label>
                  <div class="form-group">
                    <input type="text" name="nama_user" value="<?php echo $d['nama_user'] ?>" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                  <div class="form-group">
                    <input type="text" name="email_user" value="<?php echo $d['email_user'] ?>" class="form-control" >
                  </div>
                </div>
               <div class="col-md-6">
                    <label>Telpon</label>
                  <div class="form-group">
                    <input type="text"  class="form-control" name="no_hp" value="<?php echo $d['no_hp'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>No Rekening</label>
                  <div class="form-group">
                    <input type="text" class="form-control"  name="no_rek" value="<?php echo $d['no_rek'] ?>">
                  </div>
                </div>
                <div class="col-md-6">

                    <label>Nama Rekening</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama_rek" value="<?php echo $d['nama_rek'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Username</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Password</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="password" value="<?php echo $d['password'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field">
                          <label for="date-start">Tgl Lahir</label>
                          <input type="text" class="form-control" id="date-start"  name="tgl_lahir" value="<?php echo $d['tgl_lahir'] ?>"/>
                        </div>
                </div>
                <div class="col-md-6">
                  <label>Jenis Kelamin</label>
                  <div class="form-group">
                
                  <p>
                    <input type="radio" name="jekel" value="L" <?php if ($d['jekel']=="L") {echo "checked";} ?>>Pria<br />
               <input type="radio"  name="jekel" value="P" <?php if ($d['jekel']=="P") {echo "checked";} ?>>Wanita</p>
                  </div>
                </div>
                
                <div class="col-md-12">
                    <label>Alamat</label>
                  <div class="form-group">
                    <textarea name="alamat"   class="form-control"  cols="30" rows="3" ><?php echo $d['alamat'] ?></textarea>
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

