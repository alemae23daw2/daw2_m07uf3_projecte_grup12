<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard dels usuaris tipus admin')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="<?php echo e(url('clients')); ?>">Clients: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="<?php echo e(url('clients/create')); ?>">Clients: Crea un nou client</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="<?php echo e(url('apartaments')); ?>">Apartaments: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="<?php echo e(url('apartaments/create')); ?>">Apartaments: Crea un nou apartament</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="<?php echo e(url('lloga')); ?>">Lloga: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="<?php echo e(url('lloga/create')); ?>">Lloga: Crea un nou llogament</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="<?php echo e(url('usuaris')); ?>">Usuaris: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="<?php echo e(url('usuaris/create')); ?>">Usuaris: Crea un nou usuari</a>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/empresa/resources/views/dashboard.blade.php ENDPATH**/ ?>