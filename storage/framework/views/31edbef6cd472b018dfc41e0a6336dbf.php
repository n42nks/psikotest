
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
			<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
			  <div class="card-header">NPM : <?php echo e($benarr[0]->npm); ?></div>
			  <div class="card-body">
			    <h4 class="card-title">Nama : <?php echo e($benarr[0]->nama); ?></h4>
			    <p class="card-text">
			    	Kota : <?php echo e($benarr[0]->kota); ?>

			    </p>
			    <p class="card-text">
			    	Sekolah : <?php echo e($benarr[0]->sekolah); ?>

			    </p>
			  </div>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Pertanyaan</th>
								<th>Kunci Jawaban</th>
								<th>Jawaban Peserta</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $benarr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tr>
									<td><?php echo e($br->id_soal); ?></td>
									<td><?php echo e($br->soal); ?></td>
									<td><?php echo e($br->jawaban); ?></td>
									<td><?php echo e($br->jawaban_peserta); ?></td>
									<td><?php if($br->jawaban == $br->jawaban_peserta): ?>
										Benar
										<?php else: ?>
										<span style="color: red;">Salah</span>
										<?php endif; ?>
									</td>
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
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasiltpa\detail_hasiltpa.blade.php ENDPATH**/ ?>