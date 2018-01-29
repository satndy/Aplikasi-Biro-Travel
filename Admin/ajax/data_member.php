<?php     session_start();
if(empty($_SESSION)){
	header("Location: index.php");
} ?>
<?php 

include '../../class/user.php';

$db= new user();


?>
<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a    href="ajax/edit_member.php">Member</a></li>
			
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Member</span>

				</div>
				<div class="box-icons">
				<a href="#"  data-target="#ModalAdd" data-toggle="modal"><button type="button" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Data"><b class="glyphicon glyphicon-plus"></b></button></a>
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>

				</div>

				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">

				<table class="table table-bordered table-responsive table-striped table-hover table-heading table-datatable" id="datatable-1">

					<thead>
					
						<tr>

								<th>ID</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Email</th>
		<th>No Hp</th>
		<th>No Rekening</th>
		<th>Nama Rekening</th>
		<th>Username</th>
		<th>Password</th>
		<th>Tgl_lahir</th>
		<th>Jekel</th>
		<th>Alamat</th>
		<th>Pilihan</th>
						</tr>
					</thead>

					<tbody>
									<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
		
					<!-- Start: list_row -->
					</tr>
						<tr>
							<td ><?php echo $x['id_user']; ?></td>
							<td><img class="img-rounded" src="../foto/<?php echo $x['foto']; ?>" alt=""></td>
							<td><?php echo $x['nama_user']; ?></td>
		<td><?php echo $x['email_user']; ?></td>
		<td><?php echo $x['no_hp']; ?></td>
		<td><?php echo $x['no_rek']; ?></td>
		<td><?php echo $x['nama_rek']; ?></td>
		<td><?php echo $x['username']; ?></td>
		<td><?php echo $x['password']; ?></td>
		<td><?php echo $x['tgl_lahir']; ?></td>
		<td><?php echo $x['jekel']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td>
			

			  <a href="#" class='btn btn-warning open_modal' id='<?php echo $x['id_user']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
			      <a href="#" onclick="confirm_modal('proses.php?id=<?php echo $x['id_user']; ?>&aksi=hapus');"><button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Data"><i class="fa fa-trash-o"></i></button></a>
		</td>
						</tr>
						
						    
						
						
					<!-- End: list_row -->
					<?php 
	}


	?>
	
					</tbody>
					<tfoot>
						<tr>
									<th>ID</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Email</th>
		<th>No Hp</th>
		<th>No Rekening</th>
		<th>Nama Rekening</th>
		<th>Username</th>
		<th>Password</th>
		<th>Tgl_lahir</th>
		<th>Jekel</th>
		<th>Alamat</th>
		<th>Pilihan</th>
						</tr>
					</tfoot>
				</table>
		
			</div>
		</div>
	</div>
</div>

 <?php include ('../modal/modal_delete.php');
 include ('../modal/modal_tambah_user.php');
  include ('../modal/modal_edit_user.php');

 ?>

<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>

        <div id="ModalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>

        
        <script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "ajax/edit_member.php",
                        type: "GET",
                        data : {id_user: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>



<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
