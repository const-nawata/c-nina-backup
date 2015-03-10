<?php
/**
 * Layout with narrow right sidebar and wide left sidebar
 */
?>
@extends('layouts.main')

@section('main_container')
<div class="row">
	<div class="col-md-9">
		@yield('content')
	</div>
	<div class="col-md-3">
		@yield('sidebar')
	</div>
</div>
@stop