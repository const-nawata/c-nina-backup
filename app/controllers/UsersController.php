<?php

class UsersController extends BaseController {

	public function getList(){
		return View::make('users/list', [ 'a_tab' => 'users_list']);
	}

}//	Class end
