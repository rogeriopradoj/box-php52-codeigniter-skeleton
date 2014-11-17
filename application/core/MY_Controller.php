<?php
class MY_Controller extends CI_Controller
{
    /**
     * armazenar relacionados com todos os controllers para todas as views twig
     * @var array
     */
    protected $twigData = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        // flashdata tem que ficar disponível para todos os controllers e todas as views
        $this->twigData['flashdata_message'] = $this->session->flashdata('flashdata_message');
    }
}
