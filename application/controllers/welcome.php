<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data = array(
              'title'=>"Knightsbridge CMS"  
            );
		$this->load->view('templates/header',$data);
//		$this->load->view('templates/header');
//                $this->load->view('templates/sidebar');
//                $this->load->view('blank_page');
                $this->load->view('section/content_header');
                $this->load->view('section/dashboard_icon');
                $this->load->view('templates/footer');
               $this->load->view('templates/sidebar');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */