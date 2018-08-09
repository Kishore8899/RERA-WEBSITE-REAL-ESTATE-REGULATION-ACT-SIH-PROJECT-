<?php $__env->startSection('content'); ?>

  <br>
  <div class="jumbotron" style="text-align:justify;opacity: 0.935;">
  <h2 style="color:#7E94FF;">REACH US</h2>
  <div class="col-sm-12"  style="background-color:lightyellow;outline: solid;outline-color: grey;outline-style: ridge;">
     <h2 style="text-align:center;color:blue;"> GOVERNMENT OF DELHI</h2>
  <h4 style="color:tomato ;">REAL ESTATE REGULATORY AUTHORITY</h4>
  <p style="font-size: 16px;color:grey;">1st Floor, PN Bus Station,<br> RTC House, xxx - 520013<br> Help Desk 8367770574 (10 AM - 6 PM) <br>
  General Queries  9985533388 (Director Planning)</p> Write to  <a href=""> helpdesk-rera.x.in</a>  
</div>
<br><br><br><br>
  <form action="/action_page.php">
  <h3 style="color:#7E94FF">FEEDBACK/SUGGESTION</h3>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="pwd" placeholder="Enter name" name="rera.act">
    </div>
  <div class="form-group">
      <label for="mobileno">Mobileno:</label>
    <input type="mobno" class="form-control" id="pwd" placeholder="Enter mobileno:" name="mobno">
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">select
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">General</a></li>
      <li><a href="#">Transport</a></li>
    </ul>
  </div>
  <br>
  <div class="form-group">
  <label for="comment">Feedback:</label>
  <textarea class="form-control" rows="10" placeholder="Enter feedback(maximum of 500 characters) id="comment"></textarea>
  </div>
    <button type="submit"style="color:red;" class="btn btn-default">Submit</button>
  </form>
  <br>         
  <div>
    <button type="button" class="btn btn-primary">india.gov.in</button>
    <button type="button" class="btn btn-primary">delhi.gov</button>
    <button type="button" class="btn btn-primary">eoffice.ov.in</button>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>