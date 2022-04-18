<?php

namespace App\Controllers;

use App\Models\UserModel;

//------------------------Manage all users---------------------------------
class UserController extends BaseController
{

    public function index()
    {
        helper('form');
        echo view('dashboard');
    }


    //Get all User
    public function viewUser()
    {
        $page=$this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUser($page),
            'user1'=> $model->paginate(10 ,'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }


    //Get User by success status
    public function viewUserSuccess()
    {
        $page=$this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserSuccess($page),
            'user1'=> $model->paginate(10 ,'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }

    
     //Get User by fail status
     public function viewUserFail()
     {
         $page=$this->request->getGet('pages');
         $model = new \App\Models\UserModel();
         $data = [
             'user' => $model->viewUserFail($page),
             'user1'=> $model->paginate(10 ,'pages'),
             'pager' => $model->pager,
         ];
         echo view('alluser', $data);
     }

     
    //Get User by edit status
    public function viewUserEdit()
    {
        $page=$this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserEdit($page),
            'user1'=> $model->paginate(10 ,'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }


    //update Status Success
    public function updateStatus($userId)
    {
        $session = session();
        $status = "1";
        $data = [
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        $session->setFlashdata('Success', 'ยืนยันตัวตนสำเร็จ');
        return redirect()->to('/alluser');
    }

    //update Status Fail
    public function updateStatusFail($userId)
    {
        $status = "2";
        $data = [
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        return redirect()->to('/alluser');
    }


    

    //Count User
    public function countUser()
    {
        $model = new UserModel();
        // $data['countUser'] = $this->db->table($this->table)->where(["statusUser" => 0])->countAllResults();
        $data['countUser'] = $model->db->table($model->table)->countAllResults();
        echo view('dashboard', $data);
    }
}
