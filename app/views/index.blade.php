@extends('layouts.master')
 
@section('sidebar')
    @parent
@stop
 
@section('content')
    <p>ここは本文のコンテンツ</p>
	{{$test}}
@stop