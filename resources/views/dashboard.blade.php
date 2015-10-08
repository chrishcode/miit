@extends('layouts/master')


@section('content')
<div id="content" class="container">
<img class="usericon" alt="user" src="img/usericon.png">

<h2 id="dashboard">User Information</h2>

<form id="dashboardform">

  	<div class="form-group">
  			<img class="edit-name" alt="user" src="img/edit-name.png">
    		<input type="name" class="form-control" id="dashboardform" placeholder="Name">
 	</div>

	  <div class="form-group">
	  		<img class="edit-name" alt="user" src="img/edit-email.png">
	    	<input type="email" class="form-control" id="dashboardform" placeholder="Email">
	  </div>

	  <div class="form-group">	
	  		<img class="edit-name" alt="user" src="img/edit-password.png">
	    	<input type="password" class="form-control" id="dashboardform" placeholder="Password">
	  </div>
 	
  		<button type="submit" id="button-dashboard" class="btn btn-success">Save</button>
  	
</form>

<h2 id="dashboard-meetings">Meetings</h2>

<hr class="hr">


</div>

@endsection