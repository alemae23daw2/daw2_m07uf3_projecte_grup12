
<?php $__env->startSection('content'); ?>
<h1>Dades del client</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>Nom</td>
			<td><?php echo e($user->name); ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo e($user->email); ?></td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td><?php echo e($user->tipus); ?></td>
		</tr>
		<tr>
			<td>Hora d'entrada</td>
			<td><?php echo e($user->horaEntrada); ?></td>
		</tr>
		<tr>
			<td>Hora de sortida</td>
			<td><?php echo e($user->horaSortida); ?></td>
		</tr>
	</tbody>	
    </table>
<div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/pdfUsuari.blade.php ENDPATH**/ ?>