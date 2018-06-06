<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {

	public function index()
	{
        $data['Salary'] = @$this->Salary->gets_salary()[0];
        $data['Salarys'] = @$this->Salary->gets_salary();
		$this->template->view('Salary/Salary_view', $data);
    }
    
    public function replace_salary()
    {

        $this->form_validation->set_rules('Salary_name', 'Salary', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Salary','refresh');
        }
        else
        {

            $array['Salary_name'] = $this->input->post('Salary_name');
            $this->Salary->replace($array);

            $this->session->set_flashdata('status', '<div class="alert alert-success">
			<span><b>สำเร็จ</b>"เพิ่มและแก้ไขเรียบร้อย"</span>
			</div>');
					
			redirect('Salary','refresh');
        }
    }
}
