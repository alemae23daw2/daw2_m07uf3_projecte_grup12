
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('clients.update', $dades_client->dniClient)); ?>">
			<?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div class="form-group">           
                <label for="dniClient">DNI</label>
				<input type="text" class="form-control" name="dniClient" value="<?php echo e($dades_client->dniClient); ?>" />
			</div>
			<div class="form-group">           
				<label for="nomCognoms">Nom i Cognoms</label>
				<input type="text" class="form-control" name="nomCognoms" value="<?php echo e($dades_client->nomCognoms); ?>"/>
			</div>
			<div class="form-group">           
				<label for="edat">Edat</label>
				<input type="text" class="form-control" name="edat" value="<?php echo e($dades_client->edat); ?>"/>
			</div>
			<div class="form-group">           
				<label for="telefon">Telèfon</label>
				<input type="text" class="form-control" name="telefon" value="<?php echo e($dades_client->telefon); ?>"/>
			</div>
			<div class="form-group">           
				<label for="adreca">Adreça</label>
				<input type="text" class="form-control" name="adreca"  value="<?php echo e($dades_client->adreca); ?>"/>
			</div>        
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="tel" class="form-control" name="ciutat"  value="<?php echo e($dades_client->ciutat); ?>"/>
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<input type="text" class="form-control" name="pais"  value="<?php echo e($dades_client->pais); ?>"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email"  value="<?php echo e($dades_client->email); ?>"/>
			</div>
			<div class="form-group">           
				<label for="tipusTarjeta">Treball a distància</label>
				<select name="tipusTarjeta">
					<option value="Dèbit" <?php echo e($dades_client->tipusTarjeta == "Dèbit" ? 'selected' : ''); ?>>Dèbit</option>
					<option value="Crèdit" <?php echo e($dades_client->tipusTarjeta == "Crèdit" ? 'selected' : ''); ?>>Crèdit</option>			    
				</select>
			</div>
			<div class="form-group">           
				<label for="numeroTarjeta">Numero de Tarjeta</label>
				<input type="text" class="form-control" name="numeroTarjeta"  value="<?php echo e($dades_client->numeroTarjeta); ?>"/>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="<?php echo e(url('clients')); ?>">Accés directe a la Llista de Clients</a>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="<?php echo e(url('dashboard')); ?>">Torna al dashboard</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/actualitzaClient.blade.php ENDPATH**/ ?>