<h1>Form Registrasi</h1>

<form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
								<div class="col-md-6">
									<label>ID User</label>
									<div class="form-group">
										<input type="text" class="form-control"  name="id_user">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
											<label>Foto</label>
										<input type="file" class="form-control" name="foto" >
									</div>
								</div>
								<div class="col-md-6">
									<label>Nama</label>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama" name="nama_user">
									</div>
								</div>
								<div class="col-md-6">
										<label>Email</label>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email_user">
									</div>
								</div>
								<div class="col-md-6">
										<label>Telpon</label>
									<div class="form-group">
									<input type="text" class="form-control" placeholder="No Hp" name="no_hp">
									</div>
								</div>
								<div class="col-md-6">
									<label>No Rekening</label>
									<div class="form-group">
							<input type="text" class="form-control" placeholder="No Rekening" name="no_rek">
									</div>
								</div>
								<div class="col-md-6">

										<label>Nama Rekening</label>
									<div class="form-group">
										<input type="text" class="form-control" name="nama_rek" placeholder="Atas nama rekening">
									</div>
								</div>
								<div class="col-md-6">
										<label>Username</label>
									<div class="form-group">
										<input type="text" class="form-control" name="username" placeholder="Username">
									</div>
								</div>
								<div class="col-md-6">
										<label>Password</label>
									<div class="form-group">
										<input type="text" class="form-control" name="password" placeholder="Password">
									</div>
								</div>
								<div class="col-md-6">
										<div class="input-field">
													<label for="date-start">Tgl Lahir</label>
													<input type="text" class="form-control" name="tgl_lahir" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
								</div>
								<div class="col-md-6">
									<label>Jenis Kelamin</label>
									<div class="form-group">
								
									<p>
										<input type="radio"  name="jekel" value="L">Laki-laki <br/>
          								<input type="radio"  name="jekel" value="P">Perempuan</p>
									</div>
								</div>
								
								<div class="col-md-12">
										<label>Alamat</label>
									<div class="form-group">
										<textarea name="alamat" class="form-control" cols="30" rows="7" placeholder="Alamat"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Daftar" class="btn btn-primary">
									</div>
								</div>
							</div>
							</form>