<?php

class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('contacts.index');

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return View::make('contacts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 
		// $data = [
  //      'name' => Input::get('name'),
  //      'occupation' => Input::get('occupation'),
  //      'telephone' => Input::get('telephone'),
  //      'email'    => Input::get('email'),
  //      'message' => Input::get('message')
	 //      ];
	 //    $validation = Validator::make($data, Contact::$rules);

	 //    if($validation->passes())
	 //    {
		$contact = new Contact;
		$contact->name = Input::get('name',false);
		$contact->occupation = Input::get('occupation',false);
		$contact->telephone = Input::get('telephone',false);
		$contact->message = Input::get('message',false);
		$contact->save();

		return View::make('contacts.create');
		// }

		// return Redirect::back()->withInput()->withErrors($validation);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
