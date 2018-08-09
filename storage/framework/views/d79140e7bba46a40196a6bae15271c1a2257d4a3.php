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
.strokeme
{
    color: blue;
    text-decoration: 
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  
}
</style>
</head>

<body style="background-image:url('/image/clg.jpg');background-size: 100%">
  <header>
<div class="row" style="text-align:center;font-outline-color:white;background-image:url('/image/j1.jpg');background-size: 100%">
  <div class="strokeme"><h1 style="color:#c0392b;"><b>Real Estate Regulatory Authority Act, Delhi<b></h1></div></div>
<div class="row" style="background-color:black;padding:5px;text-align:center;opacity: 1">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;color:white;"><a href="<?php echo e(url('/homepage')); ?>"><ul>Home</ul></a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;" style="list-style-type:none;" ><ul class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Registrations<span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="<?php echo e(url('/registrationguidelines')); ?>">Guidelines</a></li>
      <li><a href="<?php echo e(url('/projectregistration')); ?>">Project Registration</a></li>
    <li><a href="<?php echo e(url('/agentregistration')); ?>">Agent Registration</a></li> 
    <li><a href="<?php echo e(url('complaintregistration')); ?>">Complaint Registration</a></li>
    <li><a href="<?php echo e(url('/formdownloadreg')); ?>">Form Download</a></li>  
    <li><a href="<?php echo e(url('/usermanual')); ?>">User Manual</a></li>
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
</div>
</body>
<footer>
<div class="row" style="background-color:#000000;padding:5px;color:white;text-align:center;">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/privacy')); ?>">Privacy</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/hyperlinking')); ?>">Hyperlinking</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/copyright')); ?>">Copyright</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/disclaimer')); ?>">Disclaimer</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/accessablity')); ?>">Accessability</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/termsandconditions')); ?>">Terms and conditions</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/sitemap')); ?>">Site map</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="<?php echo e(url('/rateourweb')); ?>">Rate out website</a></button>
</div>

</footer>
    
</html>
