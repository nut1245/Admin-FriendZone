<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class UserController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

   
    //Get all User
    public function viewUser()
    {
        helper('form');
        $model = new UserModel();
        $data['user'] = $model->viewUser();
        if ( $data['user']) {
            echo view('dashboard', $data);
        }
         else{
             echo view('dashboard');
         }
        
    }


    //update Status Success
    public function updateStatus($userId)
    {
        $status = "1";
        $data =[
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        return redirect()->to('/dashboard');
    }

    //update Status Fail
    public function updateStatusFail($userId)
    {
        $status = "2";
        $data =[
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        return redirect()->to('/dashboard');
    }

    //Get User by edit status
    public function viewUserEdit()
    {
        $model = new UserModel();
        $data['user'] = $model->viewUserEdit();
        if ( $data['user']) {
            echo view('dashboard', $data);
        }
         else{
             echo view('dashboard');
         }
    }

    //Get User by success status
    public function viewUserSuccess()
    {
        $model = new UserModel();
        $data['user'] = $model->viewUserSuccess();
        if ( $data['user']) {
            echo view('dashboard', $data);
        }
         else{
             echo view('dashboard');
         }
    }

    //Get User by fail status
    public function viewUserFail()
    {
        $model = new UserModel();
        $data['user'] = $model->viewUserFail();
        if ( $data['user']) {
            echo view('dashboard', $data);
        }
         else{
             echo view('dashboard');
         }
    }

    
}
