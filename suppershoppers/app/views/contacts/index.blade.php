@extends('layouts.master')
@section('content')
 <div id="wrapper1">
  <div id="cont">
  <div class="page-header">
    <h2>Contact info</h2>
  </div>
{{Form::open(['route' => 'contact.store'])}}
  <div class="form-group">
  <label>Name</label>
    {{Form::text('name' )}}
  </div>
  <div class="form-group">
    <label>Occupation </label>
    {{Form::text('occupation')}}
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    {{Form::text('telephone')}}
  </div>
  <div class="form-group">
    <label>Email</label>
    {{Form::text('email')}}
  </div>
  <div class="form-group">
    <label>Message</label>
    {{Form::textarea('message')}}
  </div>
  <div class="form-group">
    {{Form::submit('Send', ['class' => 'btn btn-default'])}}
  </div>
  </div>
{{Form::close()}}

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
</div>

@stop
