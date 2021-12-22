<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee extends CI_controller{

    function index() {
        $this->load->model('Employee_model');
        $employee = $this->Employee_model->all();

        $data['employees'] =  $employee;
        $this->load->view('list', $data);
    }

    function create() {
        $this->load->model('Employee_model');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');

        if($this->form_validation->run()==true) {
            
            // lưu nhân viên vào cơ sở dữ liệu
            $formArray = array(); 
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['created_at'] = date('Y-m-d');
            
            $this->Employee_model->create($formArray);
            $this->session->set_flashdata('success', 'đã thêm nhân viên mới');
            redirect(base_url().'employee/index');
        }
        else 
        {
            $this->load->view('create');
        }
    }
    
    function edit($employeeId) 
    {
        $this->load->model('Employee_model');
        $employee = $this->Employee_model->getEmployee($employeeId);
        $data = array();
        $data['employee'] = $employee;

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');

        if($this->form_validation->run()==false) {
            $this->load->view('edit',$data);
        }
        else{
            //update
            $formArray = array();
            $formArray['name']= $this->input->post('name');
            $formArray['email']= $this->input->post('email');
            $this->Employee_model->updateEmployee($employeeId,$formArray);
            $this->session->set_flashdata('success', 'đã chỉnh sửa nhân viên thành công');
            redirect(base_url().'employee/index');
        }

    }

    function delete($employeeId) 
    {
        $this->load->model('Employee_model');
        $employee = $this->Employee_model->getEmployee($employeeId);

        if(empty($employee)) {
            $this->session->set_flashdata('fail', 'không tìm thấy nhân viên trong cơ sở dữ liệu');
            redirect(base_url().'employee/index');
        }
        else {
            $this->Employee_model->deleteEmployee($employeeId);
            $this->session->set_flashdata('success', 'xóa nhân viên thành công');
            redirect(base_url().'employee/index');
        }
    }
}

?>