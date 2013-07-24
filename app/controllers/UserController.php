<?php

class UserController extends BaseController {

	public function index()
	{
		$data = array('test' => 'test');
		return View::make('index', $data);
	}
}