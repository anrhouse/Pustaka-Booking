<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Role</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
                      
            <a href="<?= site_url($this->uri->segment(1).'/add')?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"> Tambah Data</i></a>
            Jumlah Data : <?= $data->num_rows(); ?>
            <hr>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Role</th>
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
					<td><?= $row['role'] ?></td>
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