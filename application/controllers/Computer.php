<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Computer extends CI_Controller {

	public function index($computer_skill_id=" ")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['ComCat'] = @$this->Computer->get_computer_by_id($computer_skill_id)[0];
        }
        
        $data['Computers'] = @$this->Computer->gets_computer_skill();
        $data['Catarogys'] = @$this->Catarogy->gets_catarogy();
        
		$this->template->view('Computer_skill/Computer_view', $data);
    }
    
    public function add_computer()
    {

        $this->form_validation->set_rules('Computer_skill_name', 'Computer skill name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Computer','refresh');
        }
        else
        {
            $Computer_skill_name = @$this->Computer->get_computer_by_skill_name($this->input->post('Computer_skill_name'))[0];

            if($Computer_skill_name['Computer_skill_name'] == $this->input->post('Computer_skill_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Computer','refresh');
            }
            else
			{

				$array['Computer_skill_name'] = $this->input->post('Computer_skill_name');
                $array['Catarogy_skill_Catarogy_skill_id'] = $this->input->post('Catarogy_skill_name');
				$this->Computer->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Computer','refresh');
			}
     
        }
    }

    public function destroy($computer_skill_id)
	{
	    $this->Computer->delete($computer_skill_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Computer skill เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Computer','refresh');

    }

    public function edit_form($computer_skill_id)
	{
		redirect('Computer/index/'.$computer_skill_id.'/?status=edit', 'refresh');
    }

    public function edit($computer_skill_id)
	{
        $this->form_validation->set_rules('Computer_skill_name', 'Computer skill name', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Computer/index/'.$computer_skill_id.'/?status=edit', 'refresh');
            }
        else{

            $array['Computer_skill_name'] = $this->input->post('Computer_skill_name');
            $array['Catarogy_skill_Catarogy_skill_id'] = $this->input->post('Catarogy_skill_name');

            $this->Computer->update($computer_skill_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Computer skill เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Computer','refresh');
        }
	}
	
}
