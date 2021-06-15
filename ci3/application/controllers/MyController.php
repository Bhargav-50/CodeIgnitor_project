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
        
        // if ($this->input->post('btn-login')) {

            $this->load->library('form_validation');

            // $this->form_validation->set_rules('html field name', 'Error Msg', 'validation');
            $this->form_validation->set_rules('uname', 'Username', 'required');
            $this->form_validation->set_rules('pass', 'password', 'required');

            if ($this->form_validation->run() == FALSE)
                {
                    
                    $this->load->view('header');
                    $this->load->view('login');
                    $this->load->view('footer');
                    return false;
                }
                else
                {
                    echo "valid";
                    // $this->load->view('header')  
                    $response = $this->db->get_where('users' , array('uname' => $this->input->post('uname'), 
                    'pass' => $this->input->post('pass')))->result_array(); 
                    print_r($response);
                    if(count($response)> 0){

                    $this->session->set_userdata(array("logindata"=>$response[0]));
                    // echo "<pre>";
                    // print_r($response); //for role_id display
    
                    if ($response[0]['role_id'] == 1) {
                        header('location:dashboard');
                        return false;
                    }else{
                        header('location:home');
                        return false;
                    }
                }  
                }
                // echo "outside";
                // exit;
           
	}

    public function signout()
	{
        $this->session->unset_userdata('logindata');
        header('location:signin');
	}

    public function dashboard()
	{
        $AllUsers = $this->db->get('users')->result();
        $data['AllUsers'] = $AllUsers;
        $this->load->view('admin/header');
        $this->load->view('admin/admin_dash',$data);
        $this->load->view('admin/footer');
	}

    public function deleteuser()
	{
        // echo "called";
        // $this->uri->segment(3,0);
        // $this->input->get('id');
        // echo "<pre>";
        // print_r($this->uri);
        // print_r($this->uri->segment(3));
        $id = print_r($this->uri->segment(3));
        $response = $this->db->delete('users' , array('user_id' => $id ));
        if ($response == 1) {
            header('location:listallusers');
        } else {
            echo "Erro while deleting";
        }
        // $this->input->get('id');
	}

    public function listallusers()
	{
        $AllUsers = $this->db->get('users')->result();
        // echo "<pre>";
        // print_r($AllUsers);
        // $data['hello'] = 'hello world';
        $data['AllUsers'] = $AllUsers;
        $this->load->view('admin/header');
        $this->load->view('admin/listallusers', $data);
        $this->load->view('admin/footer');
	}


    public function deleteuserbyadmin()
	{
        // $this->input->get('user_id');
        // $this->uri->segment(3,0);
        // echo "<pre>";
        // print_r($this->uri->segment[3]);        

        $u_id = print_r($this->uri->segment(3));
        $response = $this->db->delete('users' , array('user_id' => $u_id));
        if ($response == 1) {
            header('location: listallusers ');
        }else{
            echo "Error while inserting";
        }
    }


    public function addnewuser()
	{

        $this->load->library('form_validation');

        $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');

        if ($this->form_validation->run() == FALSE)
    {
        
        $this->load->view('admin/header');
        $this->load->view('admin/addnewuser');
        $this->load->view('admin/footer');
        return false;
    }else 
    {
        echo "valid";
                
        if ($this->input->post('uname')) {
            $data = $this->input->post();
            $response = $this->db->insert('users', $data);
            // echo "<pre>";
            // print_r($data);
            if ($response == 1) {
                header('location:addnewuser');
            } else {
                echo "Erro while Registering";
            }
            
        }
    }

	}

//     public function signup()
// 	{
//         $this->load->view('header');
//         $this->load->view('registartion');
//         $this->load->view('footer');
//         // print_r($_REQUEST);
        
//         if ($this->input->post('uname')) {
//             $data = $this->input->post();
//             $response = $this->db->insert('users', $data);
            

//         // print_r($this->db->last_query());  last query print
//             // print_r($response); 
//             // echo "called";
//             if ($response == 1) {
//                 header('location:signin');
//             } else {
//                 echo "Erro while Registering";
//             }
            
//         }
// 	}
// }

//Registration form validation

public function signup()
{

    $this->load->library('form_validation');

    $this->form_validation->set_rules('uname', 'Username', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('pass', 'password', 'required');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required');

    if ($this->form_validation->run() == FALSE)
    {
        
        $this->load->view('header');
        $this->load->view('registartion');
        $this->load->view('footer');
        return false;
    }else 
    {
        echo "valid";
    
    if ($this->input->post('uname')) {
        $data = $this->input->post();
        $response = $this->db->insert('users', $data);
        // print_r($this->db->last_query());  last query print
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

}
