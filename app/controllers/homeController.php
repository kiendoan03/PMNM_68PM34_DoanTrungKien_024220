<?php
class HomeController{
    public function index(){
        // echo "Hello from HomeController - index method!";
        require_once '../app/views/home/index.php';
    }

    public function about(){
        echo "Hello from HomeController - about method!";
    }
}
?>  