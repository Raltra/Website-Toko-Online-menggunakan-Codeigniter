<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $role = $this->session->userdata('role');
        if($role != 'admin'){
            redirect(base_url('/'));
            return;
        }
    }
    

    public function index($page = NULL)
    {
        $data['title'] = 'Admin: pengguna';
        $data['content'] = $this->user->paginate($page)->get();
        $data['total_rows'] = $this->user->count();
        $data['pagination'] = $this->user->makePagination(base_url('user'), 2, $data['total_rows']);
        $data['page'] = 'pages/user/index';

        $this->view($data);
        return;
    }

    public function search($page = null){
        if(isset($_POST['keyword'])){
            $this->session->set_userdata('keyword', $this->input->post('keyword'));
        }else{
            redirect(base_url('user'));
        }

        $keyword = $this->session->userdata('keyword');

        $data['title'] = 'Admin: Pengguna';
        $data['content'] = $this->user->like('name', $keyword)->orLike('email', $keyword)->paginate($page)->get();

        $data['total_rows'] = $this->user->like('name', $keyword)->orLike('email', $keyword)->count();
        $data['pagination'] = $this->user->makePagination(base_url('user/search'), 3, $data['total_rows']);
        $data['page'] = 'pages/user/index';

        $this->view($data);
    }

    public function reset(){
        $this->session->unset_userdata('keyword');
        redirect(base_url('user'));
    }

    public function create(){
        if(!$_POST){
            $input = (object)$this->user->getDefaultValues();
        }else{
            $input = (object) $this->input->post(null, true);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            $input->password = hashEncrypt($input->password);
        }

        if(!empty($_FILES) && $_FILES['image']['name'] !== ''){
            $imageName = url_title($input->name, '-', true) . '-' . date('YmdHis');
            $upload = $this->user->uploadImage('image', $imageName);
            if($upload){
                $input->image = $upload['file_name'];
            }else{
                redirect(base_url('user/create'));
            }
        }

        if(!$this->user->validate()){
            $data['title'] = 'Tambah Pengguna';
            $data['input'] = $input;
            $data['form_action'] = base_url('user/create');
            $data['page'] = 'pages/user/form';

            $this->view($data);
            return;
        }

        if($this->user->create($input)){
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        }else{
            $this->session->set_flashdata('fail', 'Opps! terjadi suatu kesalahan');
        }

        redirect(base_url('user'));
    }

}

/* End of file User.php */
