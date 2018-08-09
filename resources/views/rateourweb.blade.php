@extends('layouts.header')
@section('content')
<br>
<div class="jumbotron" style="text-align:justify;opacity: 0.935;">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<h2 style="color:#7E94FF"><b> Rate Our Website <b></h2>
<h3 style="background-color:DodgerBlue;">Is the information Understable</h3>
<form>
  <input type="radio" name="star" > Excellent<br>
  <input type="radio" name="star" > Very Good<br>
  <input type="radio" name="star" > Good<br>
  <input type="radio" name="star" > Satisfactory<br>
  <input type="radio" name="star" > Poor<br>
</form>

<h3 style="background-color:DodgerBlue;">Are the contents related to your need?<h3>
<form>
  <input type="radio" name="star" > Excellent<br>
  <input type="radio" name="star" > Very Good<br>
  <input type="radio" name="star" > Good<br>
  <input type="radio" name="star" > Satisfactory<br>
  <input type="radio" name="star" > Poor<br>
</form>

<h3 style="background-color:DodgerBlue;">How satisfied are you with the infomation provided<h3>
<form>
  <input type="radio" name="star" > Excellent<br>
  <input type="radio" name="star" > Very Good<br>
  <input type="radio" name="star" > Good<br>
  <input type="radio" name="star" > Satisfactory<br>
  <input type="radio" name="star" > Poor<br>
</form>

<h3 style="background-color:DodgerBlue;">Please leave us your Comments<h3>
<form>
  <b>Name:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="name">
  <br><br>
  <b>Mobile No:<b>
  <input type="text" name="mobile">
  <br><br>
  <b>Comments:<b>
  <div class="form-group">
  <label for="comment"></label>
  <textarea class="form-control" rows="10" placeholder="Enter feedback(maximum of 500 characters) id="comment"></textarea>
</div>
<br><br>
 <button type="button" class="btn btn-danger" class="btn btn-primary btn-lg">Submit</button>
  </form>

</div>
@stop