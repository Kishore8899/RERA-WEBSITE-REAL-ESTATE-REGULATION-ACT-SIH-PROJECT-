<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <header>
<div class="row" style="text-align:center;"><h3>RERA Act, Delhi</h3></div>
<div class="row" style="background-color:#000080;padding:5px;color:white;text-align:center;">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Home</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">About us</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Notifications</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Registration</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Report</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Registered</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Knowledge Hub</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Promotions</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Login</button>
</div>
</header>
<?php $__env->startSection('mainContent'); ?>
<footer>
<div class="row" style="background-color:#000000;padding:5px;color:white;text-align:center;">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Privacy</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Hyperlinking</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Copyright</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Desclaimer</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Accessablity</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Terms and conditions</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Site map</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;">Rate out website</button>
</div>

</footer>
    </body>
</html>
