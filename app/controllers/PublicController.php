<?php

class PublicController extends BaseController {

	public function index()
	{
		$data = array('test' => 'test');
		return View::make('index', $data);
	}

}