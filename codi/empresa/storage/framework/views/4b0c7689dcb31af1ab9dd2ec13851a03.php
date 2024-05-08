
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
			<td>Codi Únic</td>
			<td><?php echo e($apt->codiUnic); ?></td>
		</tr>
		<tr>
			<td>Referencia</td>
			<td><?php echo e($apt->referencia); ?></td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td><?php echo e($apt->ciutat); ?></td>
		</tr>
		<tr>
			<td>Barri</td>
			<td><?php echo e($apt->barri); ?></td>
		</tr>
		<tr>
			<td>Nom Carrer</td>
			<td><?php echo e($apt->nomCarrer); ?></td>
		</tr>
		<tr>
			<td>Num Carrer</td>
			<td><?php echo e($apt->numCarrer); ?></td>
		</tr>
		<tr>
			<td>Pis</td>
			<td><?php echo e($apt->pis); ?></td>
		</tr>
		<tr>
			<td>Numero de Llits</td>
			<td><?php echo e($apt->numLlits); ?></td>
		</tr>
		<tr>
			<td>Numero d'Habitacions</td>
			<td><?php echo e($apt->numHabitacions); ?></td>
		</tr>
		<tr>
			<td>Ascensor</td>
			<td><?php echo e($apt->ascensor); ?></td>
		</tr>
        <tr>
			<td>Calefacció</td>
			<td><?php echo e($apt->calefaccio); ?></td>
		</tr>
		<tr>
			<td>Aire Acondacionat</td>
			<td><?php echo e($apt->aireCondicionat); ?></td>
		</tr>
	</tbody>	
    </table>
<div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/pdfApartament.blade.php ENDPATH**/ ?>