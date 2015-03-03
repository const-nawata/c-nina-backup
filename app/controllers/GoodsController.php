<?php

class GoodsController extends BaseController {

	public function getList(){
		return View::make('goods/list', [ 'a_tab' => 'goods_list']);
	}

}//	Class end
