<div class="container mt-5">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#forModal">
			  Tambah Data Mahasiswa
			</button> <br><br>


			<h3>Daftar Mahasiswa</h3>
				<ul class="list-group">
					<?php foreach ($data['mhs'] as $mhs) : ?>
					  <li class="list-group-item ">
					  	<?= $mhs['nama']; ?>
					  		<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-right">detail</a>
					  		<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-right" onclick="return confirm('yakin?');">hapus</a>
					  	</li>
				  	<?php endforeach; ?>
				</ul>	
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        	<div class="form-group">
			  <label for="nama" class="form-label">Nama</label>
			  <input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
			  <label for="nim" class="form-label">Nim</label>
			  <input type="number" class="form-control" id="nim" name="nim">
			</div>

			<div class="form-group">
			  <label for="email" class="form-label">Email</label>
			  <input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
			  <label class="form-label" for="jurusan">Jurusan</label>
			  <select class="form-select" id="jurusan" name="jurusan">
			    <option selected>--pilih--</option>
			    <option value="Sistem Informasi">Sistem Informasi</option>
			    <option value="Informatika">informatika</option>
			    <option value="Pendidikan Guru">Pendidikan Guru</option>
			    <option value="Farmasi">Farmasi</option>
			    <option value="keperawatan">Keperawatan</option>
			  </select>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>



