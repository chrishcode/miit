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

{{--   <div class="form-group">
    <label for="Name">Name</label>
    <input type="Name" class="form-control" id="Name" placeholder="Name">
  </div> --}}

{{--   <div class="form-group">
    <label for="Email">Email</label>
    <input type="Email" class="form-control" id="Email" placeholder="Email">
  </div> --}}

{{-- 
  <div class="form-group">
  <label for="Description">Description</label>
  <textarea class="form-control" rows="5" id="Description" placeholder="Description"></textarea>
</div> --}}

  {{-- <div class="form-group" id="timeinput">
  <label for="exampleInputEmail1">Add dates</label>
	<input id="datetimepicker" type="text" class="form-control" placeholder="Add dates">
	</div> --}}

	{{-- <a id="btn2" href="#">Add</a> --}}

	 {{-- <div class="form-group">
    <label for="Email/Invite">Email/Invite</label>
    <input type="Email/Invite" class="form-control" id="Email/Invite" placeholder="Email/Invite">
  </div>
 
  <button type="submit" class="btn btn-success">New meeting</button> --}}

  {{-- <fieldset>
            <div id="extender"></div>
            <p><a href="#" id="add">Add</a></p>
    </fieldset> --}}

</form>
</div>

@endsection