<?php $__env->startSection('content'); ?>
<div class="card mt-5">
<div class="card-header">
    Afegeix un nou treballador
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
    <form method="post" action="/clients">
        <?php echo csrf_field(); ?>
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="dniClient">DNI</label>
            <input type="text" class="form-control" name="dniClient"/>
        </div>
        <div class="form-group">           
            <label for="nomCognoms">Nom i Cognoms</label>
            <input type="text" class="form-control" name="nomCognoms"/>
        </div>
        <div class="form-group">           
            <label for="edat">Edat</label>
            <input type="number" class="form-control" name="edat"/>
        </div>
        <div class="form-group">           
            <label for="telefon">Telèfon</label>
            <input type="text" class="form-control" name="telefon"/>
        </div>
        <div class="form-group">           
            <label for="adreca">Adreça</label>
            <input type="text" class="form-control" name="adreca"/>
        </div>        
        <div class="form-group">
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat"/>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" name="pais"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="tipusTarjeta">Tipus de Tarjeta</label>
            <select name="tipusTarjeta">
                <option value="Dèbit">Dèbit</option>
                <option value="Crèdit">Crèdit</option>			    
			</select>
        </div>
        <div class="form-group">           
            <label for="numeroTarjeta">Numero de Tarjeta</label>
            <input type="text" class="form-control" name="numeroTarjeta"/>
        </div>   
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="<?php echo e(url('dashboard')); ?>">Torna al dashboard</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/creaClient.blade.php ENDPATH**/ ?>