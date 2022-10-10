<?php namespace App\Models;

use CodeIgniter\Model;

class usermodel extends Model{

    protected $table = 'sinuptb'; //table name
    //  protected $primaryKey = 'id';
     protected $allowedFields= ['username','city','password','email','mobile','DOB','address','gender']; //column name of table
    
    function email_available($email)
    {
        $builder=$this->db->table('sinuptb');
        $builder->select("username,email,password");
        $builder->where('email',$email);
        $result=$builder->get();
        if(count($result->getResultArray())>0)
        {
            return true;
        }
        else{
            return false;
        }
    }
    
}

