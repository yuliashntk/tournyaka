<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('/pages/dashboard');
	}

	public function tentang_kami()
	{
		return view('/pages/tentang_kami');
	}

	public function destinasi()
	{
		return view('/pages/destinasi');
	}

	public function pangandaran’s_trivia()
	{
		return view('/pages/pangandaran’s_trivia');
	}

	public function wuop()
	{
		return view('/pages/wuop');
	}

	public function kuliner()
	{
		return view('/pages/kuliner');
	}

	public function budaya()
	{
		return view('/pages/budaya');
	}
	
	public function hidden_gems()
	{
		return view('/pages/hidden_gems');
	}
	
	public function mengapa_pilih_pangandaran()
	{
		return view('/pages/mengapa_pilih_pangandaran');
	}

	public function get_to_know()
	{
		return view('/pages/get_to_know');
	}
}
