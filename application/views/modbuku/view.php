<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
                      
            <a href="<?= site_url($this->uri->segment(1).'/add')?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"> Tambah Data</i></a>
            Jumlah Data : <?= $data->num_rows(); ?>
            <div id="message">
            	<?= $this->session->flashdata('message');?>
            </div>
            <hr>
			<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Kategori</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
							$no = 1;
							foreach ($data->result_array() as $row) {

								//Primary key dr table
								$id = $row['id'];
						
						?>	
						<tr>
							<td><?= $no; ?></td>
							<td><?= $row['judul_buku'] ?></td>
							<td><?= $row['nama_kategori'] ?></td>
							<td><?= $row['pengarang'] ?></td>
							<td><?= $row['penerbit'] ?></td>
							<td>
								<a href="<?= site_url($this->uri->segment(1).'/detail/'.$id)?>" title="Detail">Detail</a> | 
								<a href="<?= site_url($this->uri->segment(1).'/edit/'.$id)?>" title="Edit">Edit</a> | 

								<a href="<?= site_url($this->uri->segment(1).'/delete/'.$id)?>" title="Delete" onclick="return confirm('Want to delete?')">Delete</a>
							</td>
						</tr>
						<?php					
								$no++;
							}
						?>
					</tbody>
				</table>
			</div>
			

        </div>
    </div>
</div>

<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Catatan</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        	Pada CRUD Data Buku ada beberapa tambahan : 
			<ul>
				<li>
					View menggunakan datatable, tambahkan plugin datatable pada footer.php
				</li>
				<li>
					Pada halaman tambah, format penulisan isbn akan langsung disesuaikan menggunakan jquery (cukup tuliskan angka isbnnya saja), tambahkan plugin jquery pada bagian bawah file add.php dan berikan script dibawahnya
				</li>
				<li>
					Setiap action (simpan, update, delete) akan ada pesan (flash data) pada halaman view. settingan ada pada <strong>controller function error()</strong>
				</li>
				<li>
					Ketika gambar/ image diupload, akan otomatis di rename
				</li>
				<li>
					Ketika hapus data, file akan ikut terhapus
				</li>
				<li>
					Ketika update image(cover) pada edit data, image sebelumnya akan dihapus dan diganti image yg baru
				</li>
			</ul>
        </div>
    </div>
</div>