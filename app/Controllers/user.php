<?php namespace App\Controllers;
use App\Models\usermodel;
use CodeIgniter\Controller;

class user extends BaseController
{
    public function index()
    {
        return view('register');
    }
    public function register()
    {
        helper(['form','url']);
        $validation = \Config\Services::validation();
        $check=$this->validate([
            'username'=>'required',
            'email'=>'required|is_unique[sinuptb.email]',
            'password'=>'required',
            'confirm_password'=>'required|matches[password]',
        ]);

        if(! $check)
        {
        echo "failed";
           return view('register',['validation'=>$this->validator]);
        }
        else{
            echo "successful";
               
            $encrypter = \Config\Services::encrypter();
            $model = new usermodel();
            $data = ['username'=>$this->request->getVar('username'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password') ];
            // 'password'=>$encrypter->encrypt($this->request->getVar('password')) ];

            $model->insert($data);
        }
    }
}