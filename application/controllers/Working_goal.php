<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_goal extends CI_Controller {

	public function index($working_goal_id = " ")
	{
        if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Working_goal'] = @$this->Working_goal->get_working_goal_by_id($working_goal_id)[0];
        }

        $data['Working_goals'] = @$this->Working_goal->gets_working_goal();

		$this->template->view('Working_goal/Working_goal_view', $data);
    }
    
    public function add_working_goal()
    {

        $this->form_validation->set_rules('Working_goal_name', 'Working Goal', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger">
            <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
			</div>');
				
            redirect('Working_goal','refresh');
        }
        else
        {
            $Working_goal_name = @$this->Working_goal->get_working_goal_by_name($this->input->post('Working_goal_name'))[0];

            if($Working_goal_name['Working_goal_name'] == $this->input->post('Working_goal_name')){

                $this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
                </div>');
            
                redirect('Working_goal','refresh');
            }
            else
			{

				$array['Working_goal_name'] = $this->input->post('Working_goal_name');

				$this->Working_goal->insert($array);
					
				$this->session->set_flashdata('status', '<div class="alert alert-success">
				<span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span>
				</div>');
					
				redirect('Working_goal','refresh');
			}
     
        }
    }

    public function destroy($working_goal_id)
	{
	    $this->Working_goal->delete($working_goal_id);
	    $this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของ Working Goal เรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Working_goal','refresh');

    }

    public function edit_form($working_goal_id)
	{
		redirect('Working_goal/index/'.$working_goal_id.'/?status=edit', 'refresh');
    }

    public function edit($working_goal_id)
	{
        $this->form_validation->set_rules('Working_goal_name', 'Working Goal', 'required');
		
        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Working_goal/index/'.$working_goal_id.'/?status=edit', 'refresh');            }
        else{

            $array['Working_goal_name'] = $this->input->post('Working_goal_name');

            $this->Working_goal->update($working_goal_id, $array);
                        
            $this->session->set_flashdata('status', '<div class="alert alert-success">
            <span><b>สำเร็จ</b>"แก้ไข ข้อมูลของ Works เรียบร้อยแล้ว"</span>
            </div>');
                        
            redirect('Working_goal','refresh');
        }
	}
}
