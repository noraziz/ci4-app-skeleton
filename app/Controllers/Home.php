<?php 
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
            //return redirect()->to(base_url() . '/dashboard');

            return view('welcome_message');
	}
	
	public function satu()
	{
		$this->twig = new \noraziz\ci4twiggy\Twiggy();
		$this->twig->init(__CLASS__);
	}
	
	public function dua()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
