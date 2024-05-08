<?php $__env->startSection('content'); ?>
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>Codi Unic</td>
            <td>Referencia</td>
            <td>Ciutat</td>
            <td>Barri</td>
            <td>Nom Carrer</td>
            <td>Numero Carrer</td>
            <td>Pis</td>
            <td>Numero de Llits</td>
            <td>Numero d'Habitacions</td>
            <td>Ascensor</td>
            <td>Calefacció</td>
            <td>Aire Acondicionat</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dades_apartaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($apt->codiUnic); ?></td>
            <td><?php echo e($apt->referencia); ?></td>
            <td><?php echo e($apt->ciutat); ?></td>
            <td><?php echo e($apt->barri); ?></td>
            <td><?php echo e($apt->nomCarrer); ?></td>
            <td><?php echo e($apt->numCarrer); ?></td>
            <td><?php echo e($apt->pis); ?></td>
            <td><?php echo e($apt->numLlits); ?></td>
            <td><?php echo e($apt->numHabitacions); ?></td>
            <td><?php echo e($apt->ascensor); ?></td>
            <td><?php echo e($apt->calefaccio); ?></td>
            <td><?php echo e($apt->aireCondicionat); ?></td>
            <td class="text-left">
                <form action="<?php echo e(route('apartaments.destroy', $apt->codiUnic)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="<?php echo e(route('apartaments.edit', $apt->codiUnic)); ?>" class="btn btn-primary btn-sm">Edita</a>
                <a href="<?php echo e(route('apartaments.show', $apt->codiUnic)); ?>" class="btn btn-info btn-sm">Mostra</a>
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
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/llistaApartaments.blade.php ENDPATH**/ ?>