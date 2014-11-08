<?php

class BaseController extends Controller {

	public function __construct() {
		// Query database to get values (hardcoded in this example)

		// Session::flash() will persist the data only across the next
		// request, which is sufficient in this case. 
		// Session::put() will also work
		Session::flash('site_name','Laravel Test Site');
		Session::flash('language','English');
		Session::flash('foo','bar');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
