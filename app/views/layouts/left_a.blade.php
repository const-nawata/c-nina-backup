<?php
/**
 * Layout with narrow left sidebar, wide middle side bar and additional right sidebar
 */
?>
@extends('layouts.main')

@section('main_container')
<div class="row">
	<div class="col-md-3">
		@yield('sidebar')
	</div>
	<div class="col-md-6">
		@yield('content')
	</div>
	<div class="col-md-3">
		@yield('a_sidebar')
	</div>
</div>
@stop