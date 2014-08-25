<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myfb extends CI_Controller {
	
    public function index() {
        //$this->load->view('fb_view');
        $this->load->library('facebook');
        print 'hello';
        $this->facebook->getme();
    }
    
    
    
}
