@extends('app')
@section('head')
@stop
@section('content')
	@if (Auth::user()->role === 'ADMIN')
		<project-dashboard-admin></project-dashboard-admin>
	@else
		<project-dashboard-user></project-dashboard-user>
	@endif
@stop