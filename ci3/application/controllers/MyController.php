<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class name muste be same as file name

class MyController extends CI_Controller {

    public function home()
	{
        header('location:index');
	}


	public function index()
	{
        $this->load->view('header');
        $this->load->view('main');
        $this->load->view('footer');
	}

    public function signin()
	{
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
        
        if ($this->input->post('uname')) {
            // $response = $this->db->insert('users', $data);
            $response = $this->db->get_where('users' , array('uname' => $this->input->post('uname'), 
            'pass' => $this->input->post('pass')))->result_array();
            // echo "<pre>";
            // $data = $this->input->post();
            // print_r($data);
            // print_r($response);

            if(count($response)> 0){

            $this->session->set_userdata($response[0]);
            // echo "<pre>";
            // print_r($response); //for role_id display

                if ($response[0]['role_id'] == 1) {
                    header('location:dashboard');
                }else{
                    header('location:home');
                }
                
            }else {  ?>
                <script>
                    alert("invalid");
                </script>
            <?php }
        }
	}

    public function dashboard()
	{
        $this->load->view('admin/header');
        $this->load->view('admin/mainpage');
        $this->load->view('admin/footer');
	}

    public function signup()
	{
        $this->load->view('header');
        $this->load->view('registartion');
        $this->load->view('footer');
        // print_r($_REQUEST);
        
        if ($this->input->post('uname')) {
            $data = $this->input->post();
            $response = $this->db->insert('users', $data);
            // print_r($response); 
            // echo "called";
            if ($response == 1) {
                header('location:signin');
            } else {
                echo "Erro while Registering";
            }
            
        }
	}
}