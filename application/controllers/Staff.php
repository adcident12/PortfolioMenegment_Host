<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index($staff_id = "")
	{
		if(@$status == '') {
            $status = $this->input->get('status');
		}
		if( $status == 'edit'){
			$data['status']  = 'edit';   
			$data['Staff'] = @$this->Staff->get_staff_by_id($staff_id)[0];
		}
		
		$data['Staffs'] = @$this->Staff->gets_staff();
		// print_r($data);
		$this->template->view('Profile/User_view', $data);
	}

	public function add_staff()
	{
		$this->form_validation->set_rules('Staff_email', 'Staff email', 'required|valid_emails');
		$this->form_validation->set_rules('Staff_password', 'Staff password', 'required');
        $this->form_validation->set_rules('Staff_department', 'Staff department', 'required');
		$this->form_validation->set_rules('Staff_name', 'Staff firstname',  'required');
		$this->form_validation->set_rules('Staff_lastname', 'Staff lastname',  'required');
		$this->form_validation->set_rules('Staff_tel', 'Staff telephone', 'required|is_natural|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('Staff_status', 'Staff status', 'required');
		$this->form_validation->set_rules('Staff_addr', 'Staff address', 'required');



        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Staff','refresh');
            }
        else{

				$Staff_email = @$this->Staff->get_staff_by_email($this->input->post('Staff_email'))[0];

				if($Staff_email['Staff_email'] == $this->input->post('Staff_email')){

					$this->session->set_flashdata('status', '<div class="alert alert-danger">
                	<span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
					</div>');
				
                	redirect('Staff','refresh');
				}
				else
				{

					$array['Staff_email'] = $this->input->post('Staff_email');
					$array['Staff_password'] = $this->input->post('Staff_password');
					$array['Staff_department'] = $this->input->post('Staff_department');
					$array['Staff_name'] = $this->input->post('Staff_name');
					$array['Staff_lastname'] = $this->input->post('Staff_lastname');
					$array['Staff_tel'] = $this->input->post('Staff_tel');
					$array['Staff_status'] = $this->input->post('Staff_status');
					$array['Staff_addr'] = $this->input->post('Staff_addr');

					$this->Staff->insert($array);
					
					$this->session->set_flashdata('status', '<div class="alert alert-success">
					<span><b>สำเร็จ</b>"สามารถใช้ล็อคอินเข้าสู่ระบบได้"</span>
					</div>');
					
					redirect('Staff','refresh');
				}
            }
	}

	public function destroy($staff_id)
	{
		$this->Staff->delete($staff_id);
		$this->session->set_flashdata('status', '<div class="alert alert-success">
		<span><b>สำเร็จ</b>"ลบข้อมูลของบัญชีเรียบร้อยแล้ว"</span>
		</div>');
					
		redirect('Staff','refresh');

	}

	public function edit_form($staff_id)
	{
		redirect('Staff/index/'.$staff_id.'/?status=edit', 'refresh');
	}

	public function edit($staff_id)
	{
		$this->form_validation->set_rules('Staff_email', 'Staff email', 'required|valid_emails');
		$this->form_validation->set_rules('Staff_password', 'Staff password', 'required');
        $this->form_validation->set_rules('Staff_department', 'Staff department', 'required');
		$this->form_validation->set_rules('Staff_name', 'Staff firstname',  'required');
		$this->form_validation->set_rules('Staff_lastname', 'Staff lastname',  'required');
		$this->form_validation->set_rules('Staff_tel', 'Staff telephone', 'required|is_natural|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('Staff_status', 'Staff status', 'required');
		$this->form_validation->set_rules('Staff_addr', 'Staff address', 'required');



        if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('status', '<div class="alert alert-danger">
                <span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
				</div>');
				
                redirect('Staff/index/'.$staff_id.'/?status=edit', 'refresh');
            }
        else{

				$Staff_email = @$this->Staff->get_staff_by_email($this->input->post('Staff_email'))[0];

				if($Staff_email['Staff_email'] == $this->input->post('Staff_email')){

					$this->session->set_flashdata('status', '<div class="alert alert-danger">
                	<span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span>
					</div>');
				
                	redirect('Staff/index/'.$staff_id.'/?status=edit', 'refresh');
				}
				else
				{

					$array['Staff_email'] = $this->input->post('Staff_email');
					$array['Staff_password'] = $this->input->post('Staff_password');
					$array['Staff_department'] = $this->input->post('Staff_department');
					$array['Staff_name'] = $this->input->post('Staff_name');
					$array['Staff_lastname'] = $this->input->post('Staff_lastname');
					$array['Staff_tel'] = $this->input->post('Staff_tel');
					$array['Staff_status'] = $this->input->post('Staff_status');
					$array['Staff_addr'] = $this->input->post('Staff_addr');

					$this->Staff->update($staff_id, $array);
					
					$this->session->set_flashdata('status', '<div class="alert alert-success">
					<span><b>แก้ไขสำเร็จ</b>"สามารถใช้ล็อคอินเข้าสู่ระบบได้"</span>
					</div>');
					
					redirect('Staff','refresh');
				}
            }
	}
	
}
