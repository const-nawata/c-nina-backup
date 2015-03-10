<?php
/**
 * Layout with narrow left sidebar and wide right sidebar
 */
?>
@extends('layouts.main')

@section('main_container')
<div class="row">
	<div class="col-md-3">
		@yield('sidebar')
	</div>
	<div class="col-md-9">
		@yield('content')
	</div>
</div>
@stop