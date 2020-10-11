<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller as BaseController;


/**
 * 
 */
class PatientController extends BaseController
{
	
	function __construct()
	{
	}

	public function index(){
		
            return view('user.patients.index');
	}



}