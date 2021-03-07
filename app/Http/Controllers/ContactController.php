<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact.index');
	}

	public function confirm(Request $request)
	{
		$request->validate([
			'email' => 'required|email',
			'title' => 'required',
			'body' => 'required',
		]);

		$inputs = $request->all();

		return view('contact.confirm', [
			'inputs'=>$inputs
		]);

	}

	public function send(Request $request)
	{
	}
}
