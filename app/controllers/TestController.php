<?php

class TestController extends BaseController {

    public function __construct() {
        parent::__construct();
        
        // Any code specific to this controller, like filters, goes here

    }

    public function controller_test()
    {
        // // Remove all items from the session
        // Session::flush();

        // // Return and remove a specific item from the session
        // $language = Session::remove('language');
        // echo $language;

        return View::make('controller-test');
    }

}
