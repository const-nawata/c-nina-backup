<?php

class IndexController extends BaseController{

    public function getIndex(){



    	return View::make('index'

//     	,[
//     			'planets'  => $planets,
//     			'counter'  => $counter,
//     	]

);

    }


    public  function getIndexcontent(){
    	return View::make('indexcontent');
    }


}//	Class end