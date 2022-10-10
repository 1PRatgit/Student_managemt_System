<?php namespace App\controllers;

use App\Models\usermodel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function index()
    {
        // 
        //     print_r($model->findAll());
        
            return view('add_users');
    }
    
    public function insert()
    {
        echo "inserted";

        $data = [ 'username'=> $this->request->getVar('username'),
                'full_name'=> $this->request->getVar('fullname'),
                'city'=> $this->request->getVar('city'),
                'email'=> $this->request->getVar('email'),
                'mobile'=> $this->request->getVar('mobile'),
                'address'=> $this->request->getVar('address'),
                'DOB'=> $this->request->getVar('DOB'),
                'gender'=> $this->request->getVar('gender') ];

                $model = new usermodel();
                $model->insert($data);
     }

     public function show()
     {
        $model = new usermodel();
        $data['table']=$model->findAll();
        return view('list',$data);
     }
     public function deals()
     {
      return view('deals');
     }
     public function dashboard()
     {
      return view('dashboard');
     }
     public function edit($id)
     {
        $model = new usermodel();
        $data['row']= $model->where('id',$id)->first();
        return view('edit',$data);
     }
     public function update()
     {
        $model = new usermodel();
        $id = $this->request->getVar('id');
        $data=['username'=> $this->request->getVar('username'),
        'full_name'=> $this->request->getVar('full_name'),
        'city'=> $this->request->getVar('city'),
        'email'=> $this->request->getVar('email'),
        'mobile'=> $this->request->getVar('mobile'),
        'address'=> $this->request->getVar('address'),
        'DOB'=> $this->request->getVar('DOB'),
        'gender'=> $this->request->getVar('gender')];
        $model ->update($id,$data);
        return redirect()->to(base_url('show'));

     }
     public function example()
     {
        $encrypter= \Config\Services::encrypter();
        $k =  $encrypter->encrypt('krishna');
        echo "encrypt:".$k."<br>";
        echo $encrypter->decrypt($k);

     }
 
}


