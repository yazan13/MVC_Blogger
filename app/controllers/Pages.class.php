<?php

class Pages extends Controller
{

    public function index()
    {
        $this->view('pages/index');
    }

    public function about_us()
    {
        $data = [
            'appTitle' => 'SharePost',
            'appVersion' => '1.0.0'
        ];

        $this->view('pages/about_us', $data);
    }
}
