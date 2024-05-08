
<?php $__env->startSection('content'); ?>
<h1>Dades de l'apartament</h1>
<div class="mt-5">
	<form action="<?php echo e(route('apartaments.pdf', $dades_apartament->codiUnic)); ?>" method="get" style="display: inline-block">
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
			<td>Codi Únic</td>
			<td><?php echo e($dades_apartament->codiUnic); ?></td>
		</tr>
		<tr>
			<td>Referencia</td>
			<td><?php echo e($dades_apartament->referencia); ?></td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td><?php echo e($dades_apartament->ciutat); ?></td>
		</tr>
		<tr>
			<td>Barri</td>
			<td><?php echo e($dades_apartament->barri); ?></td>
		</tr>
		<tr>
			<td>Nom Carrer</td>
			<td><?php echo e($dades_apartament->nomCarrer); ?></td>
		</tr>
		<tr>
			<td>Num Carrer</td>
			<td><?php echo e($dades_apartament->numCarrer); ?></td>
		</tr>
		<tr>
			<td>Pis</td>
			<td><?php echo e($dades_apartament->pis); ?></td>
		</tr>
		<tr>
			<td>Numero de Llits</td>
			<td><?php echo e($dades_apartament->numLlits); ?></td>
		</tr>
		<tr>
			<td>Numero d'Habitacions</td>
			<td><?php echo e($dades_apartament->numHabitacions); ?></td>
		</tr>
		<tr>
			<td>Ascensor</td>
			<td><?php echo e($dades_apartament->ascensor); ?></td>
		</tr>
        <tr>
			<td>Calefacció</td>
			<td><?php echo e($dades_apartament->calefaccio); ?></td>
		</tr>
		<tr>
			<td>Aire Acondacionat</td>
			<td><?php echo e($dades_apartament->aireCondicionat); ?></td>
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

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/mostraApartament.blade.php ENDPATH**/ ?>