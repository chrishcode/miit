<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Miit.io</title>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('jquery.datetimepicker.css') }}">

	<link rel="stylesheet" href="{{ URL::asset('http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css') }}" />

	<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Comfortaa:400,300,700') }}" rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

</head>
<body>
<div id="wrapper">
	<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div id="header" class="container">
            <div class="navbar-header">
                <a class="logo navbar-brand" href="{{ url('/') }}"><img class="logoicon" alt="logo" src="img/logoicon.png">Miit.io</a>
            </div>
          
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/register') }}">Register</a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

		@yield('content')


		<div id="footer" class="container">
	
			<ul>
				<li><a href="#"> &copy; Miit.io</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
				<li><a href="{{ url('/contact') }}">Contact</a></li>
			</ul>
		
	</div>
</div> 


<script src="{{ URL::asset('jquery.js') }}"></script>
<script src="{{ URL::asset('build/jquery.datetimepicker.full.min.js') }}"></script>

<script>jQuery('#datetimepicker').datetimepicker({
	format:'d-m-Y H:i'
});
</script>

<script type="text/javascript">
$(function() {

$('.remove').live('click', function() {
        $(this).parent().fadeOut(300, function(){ 
            $(this).empty();
            return false;
        });
    });

  var options = '<p><input id="datetimepicker" type="text" class="datepicker" name="dates[]" value="" size="10" placeholder="Add dates"/>   <a href="#" class="remove">Remove</a></p>'; 

$('a#add').click(function() {
        $(options).fadeIn("slow").appendTo('#extender'); 
        i++;    
        return false;
    });
});

// $(document).ready(function(){

//     $("#btn2").click(function(){
//         $("#timeinput").append("<input id='datetimepicker' type='text' class='form-control' placeholder='Add dates'>");
//     });
// });
</script>

</body>

</html>