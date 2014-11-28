@extends('layouts.master')
@section('content')
 <div id="login">
  <div class="page-header">
    <div class="pull-right">
      <a href="/signin" class="btn btn-default">Sign In</a>
    </div>
    <h2>Create Account</h2>
  </div>
  {{Form::open(['action' => 'AuthController@signup'])}}
  <div class="form-group">
    {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])}}
  </div>
  <div class="form-group">
    {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
  </div>
  <div class="form-group">
    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Account', ['class' => 'btn btn-default'])}}
  </div>
  {{Form::close()}}
  </div>
@stop
