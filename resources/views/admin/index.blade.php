<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@yield('head')	
		@section('title','รวมโปรโมชั่นรถ mazda honda toyota ')
		
		
</head>
	
	@include('admin.layout.nav')
	@include('admin.layout.sidebar_container')
	
	{{-- @section('content_header') --}}
	@yield('content')		

     


	@extends('admin.layout.footer')

	

</html>