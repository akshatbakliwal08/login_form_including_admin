<?php
    class Admin extends CI_controller{
        function index(){
            $this->load->model('Admin_model');
            $users=$this->Admin_model->all();
            $data=array();
            $data['users']=$users;
            $this->load->view('list',$data);
        }
        function edit($id){
            $this->load->model('Admin_model');
            $user=$this->Admin_model->getUser($id);
            $data=array();
            $data['user']=$user;
            $this->form_validation->set_rules('name','Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('address','Address', 'required');
            $this->form_validation->set_rules('gender','Gender', 'required');
            if($this->form_validation->run() == false){
                $this->load->view('edit',$data);
            }else{
                $formArray=array();
                $formArray['name']=$this->input->post('name');
                $formArray['email']=$this->input->post('email');
                $formArray['address']=$this->input->post('address');
                $formArray['gender']=$this->input->post('gender');
                $this->Admin_model->updateUser($id,$formArray);
                $this->session->set_flashdata('success','User Updated Successfully!!');
                redirect(base_url().'index.php/admin/index');
            }
        }
        function delete($id){
            $this->load->model('Admin_model');
            $user=$this->Admin_model->getUser($id);
            if($user){
                $this->Admin_model->deleteUser($id);
                $this->session->set_flashdata('success','User Deleted Successfully!!');
                redirect(base_url().'index.php/admin/index');
            } else{
                $this->session->set_flashdata('failure','Error');
                redirect(base_url().'index.php/admin/index');   
            }
        }
    }
?>