<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_area extends CI_Controller {

	public function index($working_area_id = " ")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Working_area'] = @$this->Working_area->get_working_area_by_id($working_area_id)[0];
        }

        $data['Working_areas'] = @$this->Working_area->gets_working_area();

        // print_r($data);
		$this->template->view('Working_area/Working_area_view', $data);
    }
    
    public function add_working_area()
    {

        $this->form_validation->set_rules('Working_area_name', 'Working Area', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Working_area','refresh');
        }
        else
        {
            $Working_area_name = @$this->Working_area->get_working_area_by_name($this->input->post('Working_area_name'))[0];

            if($Working_area_name['Working_area_name'] == $this->input->post('Working_area_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Working_area','refresh');
            }
            else
			{

				$array['Working_area_name'] = $this->input->post('Working_area_name');

				$this->Working_area->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Working_area','refresh');
			}
     
        }
    }

    public function destroy($working_area_id)
	{
	    $this->Working_area->delete($working_area_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Working Area เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Working_area','refresh');

    }

    public function edit_form($working_area_id)
	{
		redirect('Working_area/index/'.$working_area_id.'/?status=edit', 'refresh');
    }

    public function edit($working_area_id)
	{
        $this->form_validation->set_rules('Working_area_name', 'Working Area', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Working_area/index/'.$working_area_id.'/?status=edit', 'refresh');            }
        else{

            $array['Working_area_name'] = $this->input->post('Working_area_name');

            $this->Working_area->update($working_area_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Works เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Working_area','refresh');
        }
	}
}
