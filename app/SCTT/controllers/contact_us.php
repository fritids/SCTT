<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( ! file_exists('../app/SCTT/views/pages/contact_us.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->data['title'] = 'Contact Us';

		$this->data['page_uri'] = uri_string();
		$this->data['nav_active'] = explode('/', $this->data['page_uri']);

		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/navbar', $this->data);
		$this->load->view('templates/banner', $this->data);
		$this->load->view('pages/contact_us', $this->data);
		$this->load->view('templates/footer', $this->data);

	}


}

/* End of file contact_us.php */
/* Location: ./app/SCTT/controllers/contact_us.php */