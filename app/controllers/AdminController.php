<?php

/*
 * AdminController
 * 総合管理画面
 * 
 */
class AdminController extends BaseController {

	public $role;
	
	public function __construct() {
		if(Auth::check()){
			$this->role = Auth::getUser()->role;
		}
	}

	// 管理画面トップ
	public function index()
	{
		if($this->role != 999){
			return Redirect::to('logout');
		}
		
		$data = array('test' => "aaa");
		return View::make('admin.index', $data);
	}
	
	// ログイン処理
	public function login()
	{
		// ログインチェック
		if(Auth::check()){
			return Redirect::to('admin');
		}
		
		$data = array('test' => '');
		return View::make('admin.login', $data);
	}
}