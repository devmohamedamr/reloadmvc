<?php

require_once "app/core/controller.php";

class user extends controller{


    public function home(){
        $data = ['username'=>"mohamed amr"];
        $this->view("user",$data);
    }


}