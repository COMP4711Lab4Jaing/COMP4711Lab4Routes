<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
		This is the "first" page link, which can be found on the homepage.
		The page should shohw a picture of Bob Monkhouse and his quote. 
	**/
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(1);
		$this->data = array_merge($this->data, $source);

		$this->render();
	}
	
	/**
		This is the top left page link, which can be found on the homepage.
		The page should show a picture of Bob Monkhouse and his quote. 
	**/
	public function zzz()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(1);
		$this->data = array_merge($this->data, $source);

		$this->render();
	}
}
