<?php

class Controller
{

    public function model($model)
    {
        require '../app/models/' . $model . '.class.php';
        return new $model;
    }

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require '../app/views/' . $view . '.php';
        } else {
            die("View doesn't exist");
        }
    }
}
