<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

	public function index($work_id = " ")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Work'] = @$this->Work->get_work_by_id($work_id)[0];
        }

        $data['Works'] = $this->Work->gets_work();

        // print_r($data);
		$this->template->view('Work/Work_view', $data);
    }
    
    public function add_work()
    {

        $this->form_validation->set_rules('Work_name', 'Work', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Work','refresh');
        }
        else
        {
            $Work_name = @$this->Work->get_work_by_name($this->input->post('Work_name'))[0];

            if($Work_name['Work_name'] == $this->input->post('Work_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Work','refresh');
            }
            else
			{

				$array['Work_name'] = $this->input->post('Work_name');

				$this->Work->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Work','refresh');
			}
     
        }
    }

    public function destroy($work_id)
	{
	    $this->Work->delete($work_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Works เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Work','refresh');

    }

    public function edit_form($work_id)
	{
		redirect('Work/index/'.$work_id.'/?status=edit', 'refresh');
    }

    public function edit($work_id)
	{
        $this->form_validation->set_rules('Work_name', 'Work', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Work/index/'.$work_id.'/?status=edit', 'refresh');            }
        else{

            $array['Work_name'] = $this->input->post('Work_name');

            $this->Work->update($work_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Works เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Work','refresh');
        }
	}
}
