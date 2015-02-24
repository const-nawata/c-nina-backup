<?php

class GoodsController extends BaseController {

	public function getList(){
		return View::make('goods/list');
	}

	public function getListcontent(){

		return  View::make('goods/listcontent');
	}

}
