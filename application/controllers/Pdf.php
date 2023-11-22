<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

    public function pdf_genrate(){
        $this->load->view('welcome_message',true);
    }

    
    
}

?>
