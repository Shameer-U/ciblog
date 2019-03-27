<?php

 class Pages extends CI_Controller{

    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        
       /* echo 'direct echoing works inside codeigniter ,but not a good practice (use "echo" for checking 
                something works or checking errors  )'; die();*/

                /*'echos' the code and 'dies'(not execute the remaining code coming underneath it)*/

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
 }