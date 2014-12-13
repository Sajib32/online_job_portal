<?php 

class Jobseeker extends Eloquent { 

	protected $fillable = array('applicants_name','fathers_name','mothers_name');

	public static $rules = array(
		'applicants_name'=>'required',
		'fathers_name'=>'required',
		'mothers_name'=>'required'
		);
}