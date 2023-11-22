<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//print_r(base_url());die;
//require_once 'localhost/assignment/vendor/autoload.php';

include_once APPPATH . 'libraries/mpdf/autoload.php';


use Mpdf\Mpdf;

class Welcome extends CI_Controller {

    public function generatePdf() {
       
      $frontPageContent = $this->load->view('front', '', true);
      $backPageContent = $this->load->view('back', '', true);

    $mpdf = new mPDF();

    $mpdf->WriteHTML($frontPageContent);
    $mpdf->AddPage();

    for ($i = 1; $i <= 10; $i++) {
        $dynamicContent = $this->load->view("another1", ['page_number' => $i], true);
        $mpdf->WriteHTML($dynamicContent);
        $mpdf->AddPage();
    }

    $mpdf->WriteHTML($backPageContent);

     echo($mpdf->Output('genrate_pdf.pdf', 'D'));

    }

     public function pdf() {
        $this->load->view('pdf_gen');
    }
   
}


