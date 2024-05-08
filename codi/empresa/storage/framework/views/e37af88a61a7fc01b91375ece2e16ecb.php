<?php $__env->startSection('content'); ?>
<h1>Llista de clients</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>DNI Client</td>
            <td>Nom i Cognoms</td>
            <td>Edat</td>
            <td>Telefon</td>
            <td>Adreça</td>
            <td>Ciutat</td>
            <td>País</td>
            <td>Email</td>
            <td>Tipus de Tarjeta</td>
            <td>Numero de la Tarjeta</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dades_clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($cli->dniClient); ?></td>
            <td><?php echo e($cli->nomCognoms); ?></td>
            <td><?php echo e($cli->edat); ?></td>
            <td><?php echo e($cli->telefon); ?></td>
            <td><?php echo e($cli->adreca); ?></td>
            <td><?php echo e($cli->ciutat); ?></td>
            <td><?php echo e($cli->pais); ?></td>
            <td><?php echo e($cli->email); ?></td>
            <td><?php echo e($cli->tipusTarjeta); ?></td>
            <td><?php echo e($cli->numeroTarjeta); ?></td>
            <td class="text-left">
                <form action="<?php echo e(route('clients.destroy', $cli->dniClient)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="<?php echo e(route('clients.edit', $cli->dniClient)); ?>" class="btn btn-primary btn-sm">Edita</a>
                <a href="<?php echo e(route('clients.show', $cli->dniClient)); ?>" class="btn btn-info btn-sm">Mostra</a>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="<?php echo e(url('dashboard')); ?>">Torna al dashboard</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/llistaClients.blade.php ENDPATH**/ ?>