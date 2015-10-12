@extends('layouts/master')


@section('content')
<div class="container content">

	<div class="meetinginfo">
		<div class="info">
			<h2>Meeting with {{ $meeting[0]['user_name'] }}</h2>
			<h5>{{ $meeting[0]['title'] }}</h5>
			<p>{{ $meeting[0]['description'] }}</p>
		</div>

		{{-- Det här stora datumet kanske man borde hämta med ajax med hjälp av id i moredates-divarna, onclick --}}
		<div class="datetime">
			<div class="caltop"><p>{{ substr($dates[0][0]['date'], 6, 4) }}</p></div>
			<p class="time">{{ substr($dates[0][0]['date'], 0, 2) . '/' . substr($dates[0][0]['date'], 3, 2) }}</p>
			<p class="time">{{ substr($dates[0][0]['date'], 11) }}</p>
		</div>
		

		<div class="btns">
			<input class="btn btn-danger" type="button" value="No">
			<input class="btn btn-success" type="button" value="Yes">
		</div>

		<a href="#" class="questionlink"><div class="circle">?</div></a>

		<div class="moredates">
			<p class="available">Available dates</p>
			@foreach($dates[0] as $key => $date)
			<div class="moredate" id="{{ $key }}">
				<div class="caltop"><p>{{ substr($date['date'], 6, 4) }}</p></div>
				<p class="time">{{ substr($date['date'], 0, 2) . '/' . substr($date['date'], 3, 2) }}</p>
				<p class="time">{{ substr($date['date'], 11) }}</p>
			</div>
			@endforeach
		</div>
		
	</div>
</div>

{{-- overlay med information --}}
<div id="overlay">
	<div class="circle infonumbers">1 Information about meeting</div>
</div>
@endsection