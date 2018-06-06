<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login_view');
    }
    
    public function check_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($email == "" && $password == ""){

            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b> Fail - </b> Email หรือ Password ผิด."กรุณากรอกอีกครั้ง"</span>
            </div>');

            redirect('Login', 'refresh');

        }else if($email=="" || $password==""){

            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b> Fail - </b> Email หรือ Password ผิด."กรุณากรอกอีกครั้ง"</span>
            </div>');

            redirect('Login', 'refresh');

        }
        else{
            $data['Staff'] = @$this->Staff->get_staff_by_email($email)[0];

        
            if($data['Staff']['Staff_email'] == $email && $data['Staff']['Staff_password'] == $password){
                
                redirect('Home', 'refresh');

            }else{

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b> Fail - </b> Email หรือ Password ผิด."กรุณากรอกอีกครั้ง"</span>
                </div>');

                redirect('Login', 'refresh');
            }
            
        }
    }

    public function logout()
    {   $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }
}