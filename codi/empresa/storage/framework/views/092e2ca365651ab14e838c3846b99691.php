<?php $__env->startSection('content'); ?>
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>Nom</td>
            <td>Email</td>
            <td>Tipus</td>
            <td>Hora d'entrada</td>
            <td>Hora de sortida</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dades_usuaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($usr->name); ?></td>
            <td><?php echo e($usr->email); ?></td>
            <td><?php echo e($usr->tipus); ?></td>
            <td><?php echo e($usr->horaEntrada); ?></td>
            <td><?php echo e($usr->horaSortida); ?></td>
            <td class="text-left">
                <form action="<?php echo e(route('usuaris.destroy', $usr->id)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="<?php echo e(route('usuaris.edit', $usr->id)); ?>" class="btn btn-primary btn-sm">Edita</a>
                <a href="<?php echo e(route('usuaris.show', $usr->id)); ?>" class="btn btn-info btn-sm">Mostra</a>
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
<?php echo $__env->make('disseny', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/empresa/resources/views/llistaUsuaris.blade.php ENDPATH**/ ?>