
<?php 

include '../../class/wisata.php';

$db= new wisata();


?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Tempat Wisata</h4>
        </div>

        <div class="modal-body">
        <form action="prosesWisata.php?aksi=update" method="post" enctype="multipart/form-data">
        <?php
foreach($db->edit($_GET['id']) as $d){
?>
            <div class="row animate-box">
            <div class="col-md-6">
              <h3 class="section-title">Gambar</h3>
              <p><img src="../images/<?php echo $d['gambar'] ?>" width='250x' height='250px'/></p>
              <ul class="contact-info">
              
              
              </ul>
            </div>
              <div class="col-md-6">
                  <label>Ganti Gambar </label>
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>" class="form-control" readonly>
                      <input type="file" class="form-control" name="gambar" >
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Nama Wisata</label>
                  <div class="form-group">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control" readonly>
                  </div>
                </div>
              
                <div class="col-md-12">
                    <label>Keterangan</label>
                  <div class="form-group">
                    <textarea name="konten"  class="form-control" cols="30" rows="7" placeholder="Alamat"><?php echo $d['konten'] ?> </textarea>
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