<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'HolyHope')); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->

    <link href="<?php echo e(mix('css/styles.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/menu.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="<?php echo e(mix('js/main.js')); ?>" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.2.0/jquery.priceformat.min.js" integrity="sha512-qHlEL6N+fxDGsJoPhq/jFcxJkRURgMerSFixe39WoYaB2oj91lvJXYDVyEO1+tOuWO+sBtUGHhl3v3hUp1tGMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
</head>

<body class="text-black ">
    <?php echo $__env->yieldContent('content'); ?>
    <script>
        var sidebar = $('#sidebar');

        function sidebarToggle() {
            sidebar.toggle('', false)
        }

        var profileDropdown = $('#ProfileDropDown');

        function profileToggle() {
            profileDropdown.toggle(' ', false)
        }
    </script>
</body>

</html>
<?php /**PATH D:\laragon\www\holy-hope\resources\views/layouts/app.blade.php ENDPATH**/ ?>