@extends('layouts/master')


@section('content')
<div class="container content">

	<div class="meetinginfo">
		<div class="info">
			<h2>Meeting with {{ $meeting[0]['user_name'] }}</h2>
			<h5>{{ $meeting[0]['title'] }}</h5>
			<p>{{ $meeting[0]['description'] }}</p>
		</div>

		<div class="datetime">
			<div class="caltop"><p>2015</p></div>
			<p class="time">Friday 18  sep</p>
			<p class="time">14:30</p>
		</div>
		

		<div class="btns">
			<input class="btn btn-danger" type="button" value="No">
			<input class="btn btn-success" type="button" value="Yes">
		</div>

		<a href="#" class="questionlink"><div class="circle">?</div></a>

		<div class="moredates">
			<p class="available">Available dates</p>
			<div class="moredate">
				<div class="caltop"><p>2015</p></div>
				<p class="time">18  sep</p>
				<p class="time">14:30</p>
			</div>

			<div class="moredate">
				<div class="caltop"><p>2015</p></div>
				<p class="time">18  sep</p>
				<p class="time">14:30</p>
			</div>

			<div class="moredate">
				<div class="caltop"><p>2015</p></div>
				<p class="time">18  sep</p>
				<p class="time">14:30</p>
			</div>

			<div class="moredate">
				<div class="caltop"><p>2015</p></div>
				<p class="time">18  sep</p>
				<p class="time">14:30</p>
			</div>

			<div class="moredate">
				<div class="caltop"><p>2015</p></div>
				<p class="time">18  sep</p>
				<p class="time">14:30</p>
			</div>
		</div>
		
	</div>
</div>

{{-- overlay med information --}}
<div id="overlay">
	<div class="circle infonumbers">1 Information about meeting</div>
</div>
@endsection