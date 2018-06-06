<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strengths extends CI_Controller {

	public function index($strengths_id = "")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Strength'] = @$this->Strengths->get_Strengths_by_id($strengths_id)[0];
        }
        $data['Strengths'] = $this->Strengths->gets_strengths();

		$this->template->view('Strengths/Strengths_view', $data);
    }
    
    public function add_strength()
    {

        $this->form_validation->set_rules('Strengths_name', 'Strengths', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Strengths','refresh');
        }
        else
        {
            $Strengths_name = @$this->Strengths->get_strengths_by_name($this->input->post('Strengths_name'))[0];

            if($Strengths_name['Strengths_name'] == $this->input->post('Strengths_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Strengths','refresh');
            }
            else
			{

				$array['Strengths_name'] = $this->input->post('Strengths_name');

				$this->Strengths->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Strengths','refresh');
			}
     
        }
    }

    public function destroy($strengths_id)
	{
	    $this->Strengths->delete($strengths_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Strengths เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Strengths','refresh');

    }

    public function edit_form($strengths_id)
	{
		redirect('Strengths/index/'.$strengths_id.'/?status=edit', 'refresh');
    }

    public function edit($strengths_id)
	{
        $this->form_validation->set_rules('Strengths_name', 'Strengths', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Strengths/index/'.$strengths_id.'/?status=edit', 'refresh');            }
        else{

            $array['Strengths_name'] = $this->input->post('Strengths_name');

            $this->Strengths->update($strengths_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Strengths เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Strengths','refresh');
        }
	}
}
