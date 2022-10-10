<?php namespace App\Controllers;
use App\Models\usermodel;
use CodeIgniter\Controller;

class login extends BaseController{

    public function index()
    {
        return view('login');
    }
    public function login_action()
    {
        $model= new usermodel();
        $result = $model->where('email',$this->request->getVar('email'))->First();

      // $result = $model->where('email',$this->request->getVar('email'))->where('password',$this->request->getVar('password'))->First();
      //print_r($result);
     
      $session=session();
         
        if($result!=null)
        {
            // $session->setFlashdata('login','<p class="status-msg success">login succesful!</p>');
            // $session->set('user',$result['username']);
            // return view('admin_home');
            // echo "successfully login!";
            // echo "<h2>Welcome, ".$result['username'];
           if($result['password']==$this->request->getVar('password'))
           {
             echo "<h2>Welcome, ".$result['username'];
          
           }
           else
           {
            $session->setFlashdata('password',' "<span class="text-danger"> invalid password.</span>"');
            return view('login');
           }
        }
        else
        {
            $session->setFlashdata('login',' "<span class="text-danger">Check email or Register as user</span>"');
            return view('login');
        }
    }
    public function admin_home()
    {
        $session = session();
        if($session->has('user'))
        {
            return view('admin_home');
        }
        else{
            return view('login');
        }
        
    }
    public function logout()
    {
        $session=session();
        $session->destroy();
        return view('login');
    }

    public function email_available()
    {
        echo "called";
        $data["title"]="Ajax";
        $this->load->view('login',$data);
    }

    public function check_email_available()
    {
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Invalid Email</span></label>';
        }
        else{
            
            $this->load->model("usermodel");
            if($this->usermodel->email_available($_POST["email"]))
            {
                echo '<label class="text-success"><span class="glyphicon glyphicon-remove"></span>valid Email</span></label>';
            }
            else
            {
                echo '<label class="text-success"><span class="glyphicon glyphicon-remove"></span>valid Email</span></label>';
            }
        }
    }
}
