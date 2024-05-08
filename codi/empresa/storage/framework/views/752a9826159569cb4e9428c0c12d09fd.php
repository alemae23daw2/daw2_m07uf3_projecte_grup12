
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
			<td>DNI</td>
			<td><?php echo e($client->dniClient); ?></td>
		</tr>
		<tr>
			<td>Nom i Cognoms</td>
			<td><?php echo e($client->nomCognoms); ?></td>
		</tr>
		<tr>
			<td>Edat</td>
			<td><?php echo e($client->edat); ?></td>
		</tr>
		<tr>
			<td>Telefon</td>
			<td><?php echo e($client->telefon); ?></td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td><?php echo e($client->adreca); ?></td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td><?php echo e($client->ciutat); ?></td>
		</tr>
		<tr>
			<td>Pais</td>
			<td><?php echo e($client->pais); ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo e($client->email); ?></td>
		</tr>
		<tr>
			<td>Tipus tarjeta</td>
			<td><?php echo e($client->tipusTarjeta); ?></td>
		</tr>
		<tr>
			<td>Numero Tarjeta</td>
			<td><?php echo e($client->numeroTarjeta); ?></td>
		</tr>
	</tbody>	
    </table>
<div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/pdfClient.blade.php ENDPATH**/ ?>