<?php
namespace Home\Controllers;

use App\Controllers\BaseController;
use \noraziz\ci4twiggy;

class Nyoba extends BaseController {

    private $twig;
	
	public function index() {
        $data = [];
        helper(['form']);
        if (!session()->get('isLoggedIn')) {
            //return redirect()->to(base_url() . '/login');
        }

        return  view('Home\Views\home', $data);
       
    }
	
	public function cca()
	{
		//echo __CLASS__;

		$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
		$this->twiggy->init(__CLASS__);
		$this->twiggy->title('Hello World on App');
		$this->twiggy->layout('beranda')->template('index')->display();
	}
	
	public function ccb()
	{
		//echo __CLASS__;

		$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
		$this->twiggy->init(__CLASS__);
		$this->twiggy->title('Hello World on Home Module');
		$this->twiggy->layout('beranda2')->template('index2')->display();
	}

    //--------------------------------------------------------------------
}
