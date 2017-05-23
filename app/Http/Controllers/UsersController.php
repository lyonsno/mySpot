<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    /**
	 * Display a listing of the resource
	 *
	 * @return Response
	 */
	public function index()
	{
	  return User::all();
	}

	/**
	 * Store a newly created resource in storage
	 *
	 * @return Response
	 */
	public function store()
	{
	  //
	}
}
