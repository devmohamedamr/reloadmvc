<?php


class controller{
    public function view($view,$data){
        if(file_exists("app/views/".$view.".php")){
            require_once "app/views/".$view.".php";
        }
    }


    public function model($model){
        if(file_exists("app/models/".$model.".php")){
            require_once "app/views/".$model.".php";
        }
    }
}