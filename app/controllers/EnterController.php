<?php

class EnterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('minimal.login');
	}

	/**
	 * Let the user enter to the system
	 *
	 * @return Response
	 */
	public function enter()
	{
		return View::make('minimal.dashboard');
	}


	/**
	 * Check user credentials
	 *
	 * @return Response
	 */
	public function login()
	{
		$datos = Input::all();

		if (Auth::attempt(array(
			'username' => $datos['username'],
			'password' => $datos['password'])))
		{
		    return Redirect::intended('go');
		}
	}
	
	/**
	 * Route user to the end of the way
	 *
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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