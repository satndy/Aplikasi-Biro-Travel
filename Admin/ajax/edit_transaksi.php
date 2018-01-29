
<?php 

include '../../class/order.php';

$db= new order();


?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
        </div>

        <div class="modal-body">
        <form action="prosesTrans.php?aksi=update" method="post" enctype="multipart/form-data">
        <?php
foreach($db->cek_bukti($_GET['id_pesan']) as $d){
?>
            
              <div class="col-md-6">
                  <label>ID Pesan</label>
                  <div class="form-group">
                    <input type="text" name="id_pesan" value="<?php echo $d['id_pesan'] ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Nama</label>
                  <div class="form-group">
                    <input type="text" name="nama_user" value="<?php echo $d['nama_user'] ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Tgl Pesanl</label>
                  <div class="form-group">
                    <input type="text" name="tgl_pesan" value="<?php echo $d['tgl_pesan'] ?>" class="form-control" readonly>
                  </div>
                </div>
               <div class="col-md-6">
                    <label>Tgl Tour</label>
                  <div class="form-group">
                    <input type="text"  class="form-control" name="tgl_tour" value="<?php echo $d['tgl_tour'] ?>" >
                  </div>
                </div>
                
                <div class="col-md-6">
                  <label>Status</label>
                  <div class="form-group">
                
                  <p>
                    <input type="radio" name="status" value="S1" <?php if ($d['status']=="S1") {echo "checked";} ?>>Belum Bayar<br />
               <input type="radio"  name="status" value="S2" <?php if ($d['status']=="S2") {echo "checked";} ?>>Lunas</p>
                  </div>
                </div>
                
           

                
                   
      

              <div class="modal-footer">
          
<input type="submit" value="Simpan" class="btn btn-success">
                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>
<?php } ?>
              </form>

           

            </div>

           
        </div>
    </div>

