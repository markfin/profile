<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }
    public function index (){
        $data = [
            'title'=>'Profile',
            'isi'=> 'layout/isi/v_profil'
            
        ];
        return view('layout/v_wrapper', $data);
    }
}