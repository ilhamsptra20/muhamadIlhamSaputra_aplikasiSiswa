<?php 

class About extends Controller {
    public function index()
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('layouts/header', $data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('layouts/header', $data);
        $this->view('about/page');
        $this->view('layouts/footer');
    }
}




