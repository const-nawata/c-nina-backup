<?php

class MainController extends BaseController {

	private function setLang( $lang='en' ){
		$uri = Request::path();
		$lang	= isset($_GET['lang']) ? $_GET['lang'] : $lang;
		App::setLocale( $lang );
	}
//______________________________________________________________________________

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout(){
		$this->setLang();
		parent::setupLayout();
	}
//______________________________________________________________________________

}//	Class end
