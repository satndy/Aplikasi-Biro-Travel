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
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Admin</h4>
        </div>

        <div class="modal-body">
        <form action="prosesAdmin.php?aksi=tambah" method="post" enctype="multipart/form-data">
            
               <div class="col-md-6">
                  <div class="form-group">
                      <label>Foto</label>
                    <input type="file" class="form-control" name="foto" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Username</label>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="user_admin">
                  </div>
                </div>
                
                <div class="col-md-6">
                    <label>Password</label>
                  <div class="form-group">
                  <input type="text" class="form-control" placeholder="password" name="pass_admin">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <label>Level</label>
                  <div class="form-group">
                
                  <p>
                    <input type="radio"  name="level" value="1">Administrator<br/>
                          <input type="radio"  name="level" value="2">Operator</p>
                  </div>
                </div>
                
                  <div class="col-md-6">
                  <label>Nama</label>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="nama" name="nama">
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