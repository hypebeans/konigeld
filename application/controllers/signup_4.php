<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_4 extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }

    function index() {
        $this->load->view('koniofficecss');
        $this->load->view('eng_signup_4');
        $this->load->view('konijs');
	}
    
    function cont() {
        //getData
        $locaddrs1 = $this->input->post("locaddrs1");
        $locaddrs2 = $this->input->post("locaddrs2");
        $loc = $locaddrs1." ".$locaddrs2;
        $number = $this->input->post("phonenum");
        $province = $this->input->post("province");
        $zip = $this->input->post("zip");
        
        $data_merchant = array(
            "id_merchant" => 0,
            "fname_merchant" => $this->session->userdata('fname'),
            "lname_merchant" => $this->session->userdata('lname'),
            "tahun_mulai_bisnis" => $this->session->userdata('year'),
            "nama_bisnis" => $this->session->userdata('bname'),
            "tipe_bisnis" => $this->session->userdata('btype'),
            "monthly_revenue" => $this->session->userdata('revenue'),
            "lokasi_bisnis" => $this->session->userdata('blocation'),
            "hp_merchant" => $this->session->userdata('phone'),
            "email_merchant" => $this->session->userdata('email'),
            "pass_merchant" => md5($this->session->userdata('pw')),
            "status_merchant" => 1
        );
        $this->m_crud->insertData($data_merchant, 'merchant');
        $mer = $this->m_crud->select('merchant', 'email_merchant', $this->session->userdata('email'))->result();
        $id_m = "";
        foreach($mer as $list) {
            $id_m = $list->id_merchant;
        }
        $data_outlet = array(
            "id_outlet" => 0,
            "id_merchant" => $id_m,
            "alamat_outlet" => $loc,
            "hp_outlet" => $number,
            "provinsi_outlet" => $province,
            "kodepos_outlet" => $zip,
            "status_outlet" => 1
        );
        $this->m_crud->insertData($data_outlet, 'outlet_merchant');
        
        $this->load->library('email');

        $subject = 'This is a test';
        $message = '<p>This message has been sent for testing purposes.</p>';

        // Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
        <title>' . html_escape($subject) . '</title>
        <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
        </style>
        </head>
        <body>
        ' . $message . '
        </body>
        </html>';
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);

        $result = $this->email
            ->from('konigeld@gmail.com')
            //->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
            ->to($this->session->userdata('email'))
            ->subject($subject)
            ->message($body)
            ->send();

        var_dump($result);
        echo '<br />';
        echo $this->email->print_debugger();
        
        /*$from_mail = 'noreply@konigeld.com';
        $to = $this->session->userdata('email');
        $subject = 'Welcome to Konigeld';
        $message = 'hai';
        //echo $subject;
        $nama = "MIME-Version: 1.0\r\n";
        $nama .= "Content-type: text/html; charset=iso-8859-1' . \r\n";
        $nama .= "To: Your Name <'".$to."'>'\r\n";
        $nama .= "From: NO-REPLY <'".$from_mail."'>'\r\n";
        //echo $nama;
        
        $sendtomail = mail($to, $subject, $message, $nama);
        
        if( $sendtomail ) echo 'Success';
        else echo 'Failed';
 
        $headers  = 'MIME-Version: 1.0\r\n';
        
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        $headers .= 'To: Your Name <'.$to.'>' . "\r\n";
        $headers .= 'From: NO-REPLY <'.$from_mail.'>' . "\r\n";
        
        $sendtomail = mail($to, $subject, $message, $headers);
        */
        //redirect('dashboard');
    }
}