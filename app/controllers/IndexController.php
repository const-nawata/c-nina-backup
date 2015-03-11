<?php

class IndexController extends MainController{

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

    public function getDashboard(){
    	return View::make( 'dashboard' );
    }
//______________________________________________________________________________

}//	Class end