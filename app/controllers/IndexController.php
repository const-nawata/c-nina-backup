<?php

class IndexController extends BaseController{

    public function getIndex(){
    	return View::make( 'index' );
    }
//______________________________________________________________________________

    public function getAbout(){
    	return View::make( 'about' );
    }
//______________________________________________________________________________

    public function getContacts(){
    	return View::make( 'contacts' );
    }
//______________________________________________________________________________


}//	Class end