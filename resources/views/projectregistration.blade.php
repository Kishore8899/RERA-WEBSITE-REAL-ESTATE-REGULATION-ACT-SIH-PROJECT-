@extends('layouts.header')
@section('content')
<br>
	<div class="jumbotron" style="text-align:justify;opacity: 0.935;">
		<h2 style="color:#7E94FF">Project Registration</h2>
	<h3 style="color:#30B1C8">General Instructions:</h3>
		<ul><li>This is not a mobile App (however can be viewed on mobile screen) so kindly use laptop/desktop for use of this site.</li>
			<li>Clear the cookies before filling the online form.</li>
			<li>Remove pop-up block from your browser.</li>
			<li>Photograph - Passport size (35mm x 45mm, 300 DPI, Straight view/Light background) and in JPEG format.</li>
			<li>All the documents that are to be uploaded in the application should be in PDF format and should not be password protected,
Drawings in DWG format and self-attested (every page of every document).</li>
			<li>Site best viewed in "Google Chrome (Version 62.0.3202.94)"</li>
			<li>Fields marked with*are mandatory.</li>
		</ul>
	<h3 style="color:#30B1C8">Guide to fill online registration form:</h3>
	<ul><li>Many details are required for the registration of project which involves information regarding promoter, co-promoters, plan approvals,
Time schedule, Location details of project, Bank account of the project, Associate details etc.</li>
			<li>For step by step understanding of filing online application, kindly refer Guidelines for Registration page.</li>
			<li>Select "New" as application type, if you are a new applicant.</li>
			<li>Select "Existing" as application type, if application was incomplete / Shortfall / Withdraw / Change Request.</li>
			<li>The entire form is divided to various parts with "Save and Continue" facilities for each part.</li>
			<li>List of Address Proof: Aadhaar/Ration Card/Bank Book/Driving License/Voter Id/Gas/Phone Bill/Passport (Any one)</li>
		</ul>
	<br>
	<form>
	<p style="text-align:center">Application Type
		  <input type="radio" name="type" value="New"> New
		  <input type="radio" name="type" value="Existing"> Existing<br>
		</form>
	</p>
</div>
@stop