@extends('layouts/master')

@section('content')

<div id="content" class="container">
<form id="Meetingform">

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">Add dates</label>
	<input id="datetimepicker" type="text" class="form-control" placeholder="Add dates">
	</div>

	 <div class="form-group">
    <label for="exampleInputPassword1">Email/Invite</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email/Invite">
  </div>
 
  <button type="submit" class="btn btn-success">New meeting</button>

</form>
</div>

@endsection