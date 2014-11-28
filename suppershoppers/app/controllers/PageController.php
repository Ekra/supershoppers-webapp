<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function advertisments()
	{
		if(Auth::check()){
			return View::make('pages.advertisments');
			// return Redirect::to('adverts');
		}
		return View::make('auth.login');
	}

}


	