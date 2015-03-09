<?php

class MainController extends BaseController {

/**
 * sets language in application
 * @param string $lang
 */
	private function setLang(){
		if( isset($_GET['lang']) )
			$lang	= $_GET['lang'];

		else{
			$sess_lang	= Session::get('lang');
			$lang		= $sess_lang ? $sess_lang :  App::getLocale();
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
