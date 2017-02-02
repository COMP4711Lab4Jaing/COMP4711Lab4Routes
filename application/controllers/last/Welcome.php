<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();		
		
		$authors = array ();
		$record = $source[(count($source) - 1)];
        $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what']);

		$this->data['authors'] = $authors;

		$this->render();
	}
}
