<?php

class MainController extends BaseController {

	private function setLang( $lang='en' ){
		if( isset($_GET['lang']) )
			$lang	= $_GET['lang'];

		else{
			$sess_lang	= Session::get('lang');
			$lang		= $sess_lang ? $sess_lang : $lang;
		}

		Session::put('lang', $lang);
		App::setLocale( $lang );
	}
//______________________________________________________________________________

	/**
	 * Setup the layout used by the controller and sets locale.
	 *
	 * @return void
	 */
	protected function setupLayout(){
		$this->setLang();
		parent::setupLayout();
	}
//______________________________________________________________________________

}//	Class end
