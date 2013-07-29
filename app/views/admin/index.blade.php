@extends('layouts.master')
 
@section('sidebar')
    @parent
@stop
 
@section('content')
    <h4>ログイン</h4>
	
	<?php
	echo Form::open(array('url' => 'admin/login'));
	echo "<dl>";
	echo "<dt>id:</dt>";
	echo "<dd>" . Form::text('username') . "</dd>";
	echo "<dt>pass:</dt>";
	echo "<dd>" . Form::password('password') . "</dd>";
	echo "</dl>";
	echo Form::submit('ログイン');
	echo Form::close();
	?>
	
	{{$test}}
@stop