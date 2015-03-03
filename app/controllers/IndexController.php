<?php

class IndexController extends BaseController{

    public function getIndex(){
    	return View::make( 'index', [ 'a_tab'  => 'intex'] );
    }
//______________________________________________________________________________

}//	Class end