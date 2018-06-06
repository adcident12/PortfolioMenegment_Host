<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catarogy extends CI_Controller {

	public function index($catarogy_skill_id = "")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Catarogy'] = @$this->Catarogy->get_catarogy_by_id($catarogy_skill_id)[0];
		}

        $data['Catarogys'] = @$this->Catarogy->gets_catarogy(); 
        
		$this->template->view('Catarogy_skill/Catarogy_view', $data);
    }

    public function add_catarogy()
    {

        $this->form_validation->set_rules('Catarogy_skill_name', 'Catarogy skill name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Catarogy','refresh');
        }
        else
        {
            $Catarogy_skill_name = @$this->Catarogy->get_catarogy_by_skill_name($this->input->post('Catarogy_skill_name'))[0];

            if($Catarogy_skill_name['Catarogy_skill_name'] == $this->input->post('Catarogy_skill_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Catarogy','refresh');
            }
            else
			{

				$array['Catarogy_skill_name'] = $this->input->post('Catarogy_skill_name');

				$this->Catarogy->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Catarogy','refresh');
			}
     
        }
    }

    public function destroy($catarogy_skill_id)
	{
	    $this->Catarogy->delete($catarogy_skill_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Catarogy skill เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Catarogy','refresh');

    }

    public function edit_form($catarogy_skill_id)
	{
		redirect('Catarogy/index/'.$catarogy_skill_id.'/?status=edit', 'refresh');
    }
    
    public function edit($catarogy_skill_id)
	{
        $this->form_validation->set_rules('Catarogy_skill_name', 'Catarogy skill name', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Catarogy/index/'.$catarogy_skill_id.'/?status=edit', 'refresh');
            }
        else{

            $array['Catarogy_skill_name'] = $this->input->post('Catarogy_skill_name');

            $this->Catarogy->update($catarogy_skill_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Catarogy skill เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Catarogy','refresh');
        }
	}
    
	
}
