@extends('layouts/master')


@section('content')
<div id="content" class="container">
<img class="usericon" alt="user" src="img/usericon.png">

<h2 id="dashboard">User Information</h2>

<form id="dashboardform">

  	<div class="form-group">
  			<img class="edit-name" alt="User" src="img/edit-name.png">
    		<input type="name" class="form-control" id="dashboardform" placeholder="Name">
 	</div>

	  <div class="form-group">
	  		<img class="edit-name" alt="Email" src="img/edit-email.png">
	    	<input type="email" class="form-control" id="dashboardform" placeholder="Email">
	  </div>

	  <div class="form-group">	
	  		<img class="edit-name" alt="Password"sword src="img/edit-password.png">
	    	<input type="password" class="form-control" id="dashboardform" placeholder="Password">
	  </div>
 		
  		<button type="submit" id="button-dashboard" class="btn btn-success">Save</button>
  	
</form>

	<h2 id="dashboard-meetings">Meetings</h2>

<hr class="hr">

	<h3 id="meet1">Jesper Hakeröd</h3>
		<img class="numb1" alt="1" src="img/numb1.png">
		<img class="mrgreen" alt="1" src="img/green.png">
	<p id="meet2">Handledning</p>

	<h3 id="meet1">Martin Gustafsson</h3>
		<img class="numb1" alt="1" src="img/numb1.png">
		<img class="mrgreen" alt="1" src="img/red.png">
	<p id="meet2">Kör inte de tricket..</p>

	<h3 id="meet1">Jonas Nilsson</h3>
		<img class="numb1" alt="1" src="img/numb1.png">
		<img class="mrgreen" alt="1" src="img/yellow.png">	
	<p id="meet2">Lite käbbel om...</p>

</div>

@endsection