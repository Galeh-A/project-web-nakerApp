<?php session_start();

class Home extends Controller {

    public function index() {
        
        $data['page'] = "Home | Naker";

        $this->view("templates/header", $data);
        $this->view("Home/index");
        $this->view("templates/footer");

    }

}