@extends('layouts.header')
@section('content')
<br>
<div class="jumbotron" style="text-align:justify;opacity: 0.935;">
<h2 style="color:#7E94FF">THE RIGHT TO INFORMATION ACT 2005</h2>
<p style="font-size: 16px">An Act to provide for setting out the practical regime of right to information for citizens to secure access to information under the control of public authorities, in order to promote transparency and accountability in the working of every public authority, the constitution of a Central Information Commission and State Information Commissions and for matters connected therewith or incidental thereto.</p>
<div >
<button onclick="funcrti()" class="btn btn-default btn-lg col-sm-12">THE RIGHT TO INFORMATION ACT 2005</button><br>
<p id="rti"></p>
</div>
<div >
<button onclick="funcnoti()" class="btn btn-primary btn-lg col-sm-12">Notification</button><br>
<p id="notif"></p>
</div>
<div >
<button onclick="funcapp()" class="btn btn-success btn-lg col-sm-12">Appeals</button><br>
<p id="app"></p>
</div>
<div >
<button onclick="funccon()" class="btn btn-info btn-lg col-sm-12">Contact details</button><br>
<p id="con"></p>
</div>
<div >
<button onclick="funcrti1()" class="btn btn-danger btn-lg col-sm-12">Published info on as per THE RIGHT TO INFORMATION ACT 2005</button><br>
<p id="rti1"></p>
<br>
</div>
</div>
<script>
var b=1,a=1,c=1,d=1,e=1
function funcrti() {
if(b==1)
    {
		sam = "Rti act 2005";
		document.getElementById("rti").innerHTML = sam;b=0;}
	else     {document.getElementById("rti").innerHTML = "";b=1;}
}
function funcnoti() {
if(a==1)
	{
				sam = 'This will be published very soon';
		document.getElementById("notif").innerHTML = sam;a=0;}
	else     {document.getElementById("notif").innerHTML = "";a=1;}
}
function funcapp() {
if(c==1)
	{
				sam = 'This will be published very soon';
				document.getElementById("app").innerHTML = sam;c=0;}
	else     {document.getElementById("app").innerHTML = "";c=1;}
}
function funccon() {
if(d==1)
    {
				sam = 'This will be published very soon';
		document.getElementById("con").innerHTML = sam;d=0;}
		else     {document.getElementById("con").innerHTML = "";a=1;}

}
function funcrti1() {
if(e==1)
    {
				sam = 'This will be published very soon';
		document.getElementById("rti1").innerHTML = sam;e=0;}
		else     {document.getElementById("rti1").innerHTML = "";e=1;}

}
</script>
@stop