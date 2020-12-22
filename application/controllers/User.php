<?php 
    class User extends CI_controller{
        function signup(){
            $this->load->model('User_model');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('gender','Gender','required');
            if($this->form_validation->run()){
                $flag=$this->User_model->checkUser($this->input->post('email'));
                if($flag){
                    $this->session->set_flashdata('failure','Email Exists');
                    redirect(base_url().'index.php/user/login');
                }
                else{
                    $formArray=array();
                    $formArray['name']=$this->input->post('name');
                    $formArray['email']=$this->input->post('email');
                    $password=$this->input->post('password');
                    $formArray['address']=$this->input->post('address');
                    $formArray['gender']=$this->input->post('gender');
                    $formArray['password']=md5($password);
                    $this->User_model->create($formArray);
                    $this->session->set_userdata('user',$formArray);
                    $this->session->set_flashdata('success','Signed Up Successfully!!');
                    redirect(base_url().'index.php/user/home');
                }
            }
            else{
                $this->load->view('signup');
            }
        }
        function login(){
            $this->load->model('User_model');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run()){
                $formArray=array();
                $formArray['email']=$this->input->post('email');
                $formArray['password']=$this->input->post('password');
                $user=$this->User_model->getUser($formArray['email'],$formArray['password']);
                if(!$user){
                    $this->session->set_flashdata('failure','Request Failed!!');
                    redirect(base_url().'index.php/user/login');
                }
                else{
                    $this->session->set_userdata('user',$user);
                    $this->session->set_flashdata('success','Signed Up Successfully!!');
                    redirect(base_url().'index.php/user/home');
                }
            }
            else{
                $this->load->view('login');
            }
        }
        function home(){
            $this->load->model('User_model');
            $data=array();
            $user=$this->session->userdata('user');
            $data['users']=$user;
            $this->load->view('home',$data);
        }
        function logout(){
            $this->load->model('User_model');
            $this->session->unset_userdata('user');
            $this->session->set_flashdata('success','Logged Out Successfully!!');
            redirect(base_url().'index.php/user/login');
        }
    }
?>