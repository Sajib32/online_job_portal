<?php

class JobseekerController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$jobseeker = Jobseeker::all();
		return View::make('jobseekers.index')
		->with('jobseeker', $jobseeker);
	}

	public function getSignup() 
	{
		return View::make('jobseekers.signup');
	}
	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Jobseeker::$rules);
		
		if ($validator->passes()) {
		$input = Input::all();
		$jobseeker = new Jobseeker;
		$jobseeker->applicants_name = $input['applicants_name'];
		$jobseeker->fathers_name = $input['fathers_name'];
		$jobseeker->mothers_name = $input['mothers_name'];
		$jobseeker->save();

		return Redirect::to('jobseeker/index')
		->with('message', 'Created');
		}

		return Redirect::to('jobseeker/signup')
			->with('message','Something wrong')
			->withErrors($validator)
			->withInput();
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