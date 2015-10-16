@extends('layouts/master')

@section('content')

<div id="content" class="container">

<form id="newmeetingform">

<h2 id="newmeeting">New meeting</h2>

<div class="form-group">
        <img class="edit-name" alt="User" src="img/edit-name.png">
        <input type="text" class="form-control" id="newmeetingform1" placeholder="Name">
  </div>

  <div class="form-group">
        <img class="edit-name" alt="Email" src="img/edit-email.png">
        <input type="text" class="form-control" id="newmeetingform2" placeholder="Email">
    </div>

    <div class="form-group" id="description">
  <img class="edit-name" alt="User" src="img/edit-name.png">
  <textarea class="form-control" rows="3" id="newmeetingform3" placeholder="Description"></textarea>
</div>


<a href="#" id="add"><img id="adddates" alt="User" src="img/add-dates.png">Add dates</a>
<div id="timeinput">

</div>

  <div class="form-group" id="emailinvite">
     <img class="edit-name" alt="Email" src="img/edit-email.png">
    <input type="text" class="form-control" id="newmeetingform4" placeholder="Email/Invite">
  </div>
 
  <button type="submit" id="button-newmeeting" class="btn btn-success">New meeting</button>

</form>

{{-- <form id="Meetingform">

<h2 id="newmeeting">New meeting</h2>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>

  <div class="form-group">
  <label for="description">Description</label>
  <textarea class="form-control" rows="5" id="description" placeholder="Description"></textarea>
</div>

  <div class="form-group" id="timeinput">
  <label for="exampleInputEmail1">Add dates</label>
	<input id="datetimepicker" type="text" class="form-control" placeholder="Add dates">
	</div>

	<a id="btn2" href="#">Add</a>

	 <div class="form-group">
    <label for="email/invite">Email/Invite</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email/Invite">
  </div>
 
  <button type="submit" class="btn btn-success">New meeting</button>


</form> --}}
</div>

@endsection