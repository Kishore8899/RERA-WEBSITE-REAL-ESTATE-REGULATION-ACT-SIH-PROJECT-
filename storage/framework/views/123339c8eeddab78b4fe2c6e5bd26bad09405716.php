<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
table, th, td {
    border: 4px solid black;
    border-collapse: collapse;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <header>
<div class="row" style="text-align:center;"><h1>RERA Act, Delhi</h1></div>
<div class="row" style="background-color:#000080;padding:5px;color:#FFFFFF;text-align:center;">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;color:white;"><a href="<?php echo e(url('/homepage')); ?>"><ul>Home</ul></a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;" style="list-style-type:none" ><ul class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Registrations<span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="<?php echo e(url('/Guidelineslinesreg')); ?>">Guidelines</a></li>
      <li><a href="<?php echo e(url('/projectreg')); ?>">Project Registration</a></li>
    <li><a href="<?php echo e(url('/agentreg')); ?>">Agent Registration</a></li> 
    <li><a href="#">Complaint Registration</a></li>
    <li><a href="#">Form Download</a></li>  
    <li><a href="#">User Manual</a></li>
    </ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul>Projects</ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul>Builders</ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul>Registered</ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul>Promotions</ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul>Login</ul></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >About US<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo e(url('/services')); ?>">Our Servies</a></li>
      <li><a href="<?php echo e(url('/recruitment')); ?>">Recruitment</a></li>
      <li><a href="<?php echo e(url('/rti')); ?>">RTI</a></li>  
      <li><a href="<?php echo e(url('/reachus')); ?>">Reach Us</a></li>
    </ul>
</button>
</div>
</header>
<div class="container">
<?php echo $__env->yieldContent('content'); ?>


</div>

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
