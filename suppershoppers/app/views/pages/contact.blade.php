@extends('layouts.master')
@section('content')

<div id="wrapper1">
<div class="content">
<h2>Request info.</h2>
 <form class="contactForm">
  <div>            
 <label>Name</label>  
  <input name="name" type="text" class="field">
 <label>Company</label>
<input name="name" type="text" class="field">
 <label>Telephone</label>
 <input name="name" type="text" class="field">
 <label>Email</label>
<input name="name" type="text" class="field">
  <label>Message</label>
<textarea name="name"></textarea><br>
<input name="Submit" type="submit" value="Submit" class="sendBtn">
  </div>            
 </form>
 </div>
 <div class="side">
	<h2>Super-shoppers</h2>
	Contact us today at:<br><br>+25426778069 or
	 +25488996618
	<br><br><br>
	Email: supershoper@shopper.com
	<br><br>
	<p class="last">Super-Shoppers <br>
	   Kenya-Nairobi <br><br>
	   Shop smart<br>
	     Enjoy shopping<br><br><br>
	   Email: supershoper@shopper.com</p>
 </div>
<br clear="all">
</div>

@stop