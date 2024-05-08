<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Empresa</title>
    </head>
    <body>
        <p>Pàgina inicial de l'aplicació web Empresa</p>
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Log in</a><br>
            <?php endif; ?>
        <?php endif; ?>
    </body>
</html><?php /**PATH /var/www/html/empresa/resources/views/inici.blade.php ENDPATH**/ ?>