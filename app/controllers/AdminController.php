<?php

/*
 * AdminController
 * 総合管理画面
 * 
 */
class AdminController extends BaseController {

	public function index()
	{
		$data = array('test' => 'test');
		return View::make('admin.index', $data);
	}
	
	public function login()
	{
		$data = array('test' => 'test');
		return View::make('admin.login', $data);
	}
	
	public function main()
	{
		$data = array('test' => 'login OK!');
		return View::make('admin.index', $data);
	}
}