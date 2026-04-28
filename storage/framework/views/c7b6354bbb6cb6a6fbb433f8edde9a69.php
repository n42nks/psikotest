
  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>

   
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Hasil Peserta</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Hasil</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>NPM</th>
								<th>Nama Peserta</th>
								<th>Soal</th>
								<th>Benar</th>
								<th>Salah</th>
								<th>Nilai</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $benar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tr>
									<td></td>
									<td><?php echo e($br->npm); ?></td>
									<td><?php echo e($br->NAMA); ?></td>
									<td><?php echo e($br->jumlah); ?></td>
									<td><?php echo e($br->hasil); ?></td>
									<td><?php echo e($br->salah); ?></td>
									<td><?php echo e($br->hasil*2); ?></td>
									<td><a href="detail-hasil-tpa/<?php echo e($br->npm); ?>" class="btn btn-sm btn-warning">Detail</a><a href="cetak-hasil-tpa/<?php echo e($br->npm); ?>" class="btn btn-sm btn-primary">Cetak</a></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasiltpa\data_hasiltpa.blade.php ENDPATH**/ ?>