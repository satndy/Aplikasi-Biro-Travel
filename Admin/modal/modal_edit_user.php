  <link rel="stylesheet" href="../../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../../css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="../../css/superfish.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../../css/magnific-popup.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../css/bootstrap-datepicker.min.css">
  <!-- CS Select -->
  <link rel="stylesheet" href="../../css/cs-select.css">
  <link rel="stylesheet" href="../../css/cs-skin-border.css">
  
  <link rel="stylesheet" href="css/style.css">
  <script src="../../js/modernizr-2.6.2.min.js"></script>
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
        </div>

        <div class="modal-body">
        <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
            
               <div class="col-md-6">
              <div class="row">
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
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                  </div>
                </div>
              </div>
                </div>
                   <input type="submit" value="Simpan" class="btn btn-success">
              </div>

              

              <div class="modal-footer">
          

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../../js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../../js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/sticky.js"></script>

  <!-- Stellar -->
  <script src="../../js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="../../js/hoverIntent.js"></script>
  <script src="../../js/superfish.js"></script>
  <!-- Magnific Popup -->
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/magnific-popup-options.js"></script>
  <!-- Date Picker -->
  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <!-- CS Select -->
  <script src="../../js/classie.js"></script>
  <script src="../../js/selectFx.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
  <script src="../../js/google_map.js"></script>
  <script src="../../js/main.js"></script>
  <!-- Google Map -->