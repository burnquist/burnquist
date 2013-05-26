<?php
class site extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("m_news");
    }
    
    function index ()
    {
        $this->load->view('site/index.php');
    }
        
    function about ($p=0)
    {
            $jppage=10;
            $this->load->library('pagination');
            $config['base_url']=base_url().'/c_news/get_rnews/';
            $config['total_rows']=$this->m_news->getjrecord();
            $config['per_page']=$jppage;
            $this->pagination->initialize($config);
            $data['pagination']=$this->pagination->create_links();
            $data['hslquery']=$this->m_news->get_news($p,$jppage);
        $this->load->view('site/about.php',$data);
    }
    
    function contacts ()
    {
        $this->load->view('site/contacts.php');
    }
    
    function gallery ()
    {
        $this->load->view('site/gallery.php');
    }
    
    function privacy ()
    {
        $this->load->view('site/privacy.php');
    }
    
    function sitemap ()
    {
        $this->load->view('site/sitemap.php');
    }
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
