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
            <h4 class="modal-title" id="myModalLabel">Tambah Data Paket Wisata</h4>
        </div>

        <div class="modal-body">
        <form action="prosesPaket.php?aksi=tambah" method="post" enctype="multipart/form-data">
            
               <div class="col-md-6">
                  <div class="form-group">
                      <label>Nama Paket</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama_paket">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Harga</label>
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="Harga" name="harga_paket">
                  </div>
                </div>
                
       <div class="col-md-12">
                    <label>Keterangan</label>
                  <div class="form-group">
                    <textarea name="ket_paket" class="form-control" cols="30" rows="7" placeholder="Alamat"></textarea>
                         <p> <button type="submit"  class="btn btn-success">Simpan</button> 
                           <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Cancel</button></p>
                  </div>
                </div>
                   <div class="modal-footer">
          

     
                   
              </div>

              

           
             
                  
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>
<script type="text/javascript">
    tinymce.init({
            selector: "textarea",
            plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste textcolor "
            ],
    
            toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks restoredraft",
    
            menubar: false,
            toolbar_items_size: 'small',
            image_advtab: true,
            style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
    });</script>
    <script src="../plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<script src="../plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="../plugins/tinymce/tinymce.min.js"></script>
<script src="../plugins/tinymce/jquery.tinymce.min.js"></script>
  
  <!-- Google Map -->