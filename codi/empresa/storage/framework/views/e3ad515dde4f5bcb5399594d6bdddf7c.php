
<?php $__env->startSection('content'); ?>
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>DNI Client</td>
            <td>Codi Ùnic</td>
            <td>Data Inici</td>
            <td>Hora Inici</td>
            <td>Data Final</td>
            <td>Hora Final</td>
            <td>Lloc de lliurament de les Claus</td>
            <td>Lloc de devolució de les Claus</td>
            <td>Preu per dia</td>
            <td>Dipòsit</td>
            <td>Quantitat de dipòsit</td>
            <td>Tipus d'assegurança</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dades_lloga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($llog->dniClient); ?></td>
            <td><?php echo e($llog->codiUnic); ?></td>
            <td><?php echo e($llog->dataInici); ?></td>
            <td><?php echo e($llog->horaInici); ?></td>
            <td><?php echo e($llog->dataFinal); ?></td>
            <td><?php echo e($llog->horaFinal); ?></td>
            <td><?php echo e($llog->lliuramentClaus); ?></td>
            <td><?php echo e($llog->devolucioClaus); ?></td>
            <td><?php echo e($llog->preuPerDia); ?></td>
            <td><?php echo e($llog->diposit); ?></td>
            <td><?php echo e($llog->dipositQuantitat); ?></td>
            <td><?php echo e($llog->tipusAsseguranca); ?></td>
            <td class="text-left">
                <form action="<?php echo e(route('lloga.destroy', $llog->dniClient)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="<?php echo e(route('lloga.edit', $llog->dniClient)); ?>" class="btn btn-primary btn-sm">Edita</a>
                <a href="<?php echo e(route('lloga.show', $llog->dniClient)); ?>" class="btn btn-info btn-sm">Mostra</a>
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
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/llistaLloga.blade.php ENDPATH**/ ?>