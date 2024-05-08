
<?php $__env->startSection('content'); ?>
<h1>Dades de l'apartament</h1>
<div class="mt-5">
	<form action="<?php echo e(route('usuaris.pdf', $dades_usuari->id)); ?>" method="get" style="display: inline-block">
        <button class="btn btn-lg btn-danger" type="submit">PDF</button>
    </form>
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
			<td><?php echo e($dades_usuari->name); ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo e($dades_usuari->email); ?></td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td><?php echo e($dades_usuari->tipus); ?></td>
		</tr>
		<tr>
			<td>Hora d'entrada</td>
			<td><?php echo e($dades_usuari->horaEntrada); ?></td>
		</tr>
		<tr>
			<td>Hora de sortida</td>
			<td><?php echo e($dades_usuari->horaSortida); ?></td>
		</tr>
	</tbody>	
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="<?php echo e(url('dashboard')); ?>">Torna al dashboard</a>                     
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="<?php echo e(url('apartaments')); ?>">Torna a la llista</a>
    </div>
<div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/mostraUsuari.blade.php ENDPATH**/ ?>