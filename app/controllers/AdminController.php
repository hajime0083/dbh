<?php

class AdminController extends BaseController {

	public function index()
	{
		$data = array('test' => 'test');
		return View::make('admin.index', $data);
	}
	
	public function login()
	{
		echo "text";
	}
}