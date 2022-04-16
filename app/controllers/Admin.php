<?php session_start();

class Admin extends Controller {

    public function index() {
        
        $data['page'] = "Home Admin | Naker";

        $data['contents'] = $this->model('Content_model')->getAll();

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $this->view("templates/header", $data);
        $this->view("admin/index", $data);
        $this->view("templates/footer");

    }

    public function insert() {

        $data['page'] = "Home Admin | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $this->view("templates/header", $data);
        $this->view("admin/insert", $data);
        $this->view("templates/footer");

    }

    public function edit($id) {
        $data['page'] = "Home Admin | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $data['fileUser'] = $this->model('Content_model')->getWhere($id)[0];

        $this->view("templates/header", $data);
        $this->view("admin/edit", $data);
        $this->view("templates/footer");
    }


    public function tambah() {

        // var_dump($_POST); die;
        if($this->model('Content_model')->insert($_POST) > 0) {
            Flashalert::setFlash('Data berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'admin');
        } else {
            Flashalert::setFlash('Data gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'admin/insert');
        }

    }

    public function ubah() {

        // var_dump($_POST); die;
        if($this->model('Content_model')->update($_POST) > 0) {
            Flashalert::setFlash('Data berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'admin');
        } else {
            Flashalert::setFlash('Data gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'admin/edit/'. $_POST['id']);
        }

    }

    public function hapus($id) {

        // var_dump($id); die;
        if($this->model('Content_model')->delete($id) > 0) {
            Flashalert::setFlash('Data berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'admin');

        } else {
            Flashalert::setFlash('Data gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'admin');
        }

    }

    public function cari() {

        $data['page'] = "Home Admin | Naker";

        $data['contents'] = $this->model('Content_model')->cari($_POST);

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $this->view("templates/header", $data);
        $this->view("admin/index", $data);
        $this->view("templates/footer");

    }

}

