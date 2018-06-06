<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
        $data['Student'] = @$this->Student->gets_student()[0];
        $data['Student_detail'] = @$this->Student->gets_student(); 
		$this->template->view('Student/Student_view', $data);
    }
    
    public function replace_student()
    {
        
        $this->form_validation->set_rules('Student_Prefix', 'Student Prefix', 'required');
        $this->form_validation->set_rules('Student_Name_Th', 'Student Name Th', 'required');
        $this->form_validation->set_rules('Student_Lname_Th', 'Student Lname Th', 'required');
        $this->form_validation->set_rules('Student_Name_Eng', 'Student Name Eng', 'required');
        $this->form_validation->set_rules('Student_Lname_Eng', 'Student Lname Eng', 'required');
        $this->form_validation->set_rules('Birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('Faculty_Name', 'Faculty Name', 'required');
        $this->form_validation->set_rules('Branch_Name', 'Branch Name', 'required');
        $this->form_validation->set_rules('GPAX', 'GPAX', 'required');
        $this->form_validation->set_rules('Degree', 'Degree', 'required');
        $this->form_validation->set_rules('Status_Name', 'Status Name', 'required');
        $this->form_validation->set_rules('Student_tel', 'Student telephone', 'required');
        $this->form_validation->set_rules('Student_email', 'Student email', 'required|valid_emails');
        $this->form_validation->set_rules('University_Th', 'University Th', 'required');
        $this->form_validation->set_rules('University_En', 'University En', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Student','refresh');
        }
        else
        {
            $array['Student_Prefix'] = $this->input->post('Student_Prefix');
            $array['Student_Name_Th'] = $this->input->post('Student_Name_Th');
            $array['Student_Lname_Th'] = $this->input->post('Student_Lname_Th');
            $array['Student_Name_Eng'] = $this->input->post('Student_Name_Eng');
            $array['Student_Lname_Eng'] = $this->input->post('Student_Lname_Eng');
            $array['Birthday'] = $this->input->post('Birthday');
            $array['Faculty_Name'] = $this->input->post('Faculty_Name');
            $array['Branch_Name'] = $this->input->post('Branch_Name');
            $array['GPAX'] = $this->input->post('GPAX');
            $array['Degree'] = $this->input->post('Degree');
            $array['Status_Name'] = $this->input->post('Status_Name');
            $array['Student_tel'] = $this->input->post('Student_tel');
            $array['Student_email'] = $this->input->post('Student_email');
            $array['University_Th'] = $this->input->post('University_Th');
            $array['University_En'] = $this->input->post('University_En');

            $this->Student->replace($array);

            $this->session->set_flashdata('status', '<div class="alert alert-success">
			<span><b>สำเร็จ</b>"เพิ่มและแก้ไขเรียบร้อย"</span>
			</div>');
					
			redirect('Student','refresh');
        }
    }
	
}
