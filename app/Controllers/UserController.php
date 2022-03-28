<?php

namespace App\Controllers;

use App\Models\UserModel;

//------------------------Manage all users---------------------------------
class UserController extends BaseController
{

    //Get all User
    public function viewUser()
    {
        helper('form');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->paginate(10),
            'pager' => $model->pager,
        ];
        echo view('dashboard', $data);
    }


    //update Status Success
    public function updateStatus($userId)
    {
        $status = "1";
        $data = [
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
        $data = [
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
        $data = [
            'user' => $model->paginate(10),
            'user' => $model->viewUserEdit(),
            'pager' => $model->pager,
        ];
        echo view('dashboard', $data);
    }




    //Get User by success status
    public function viewUserSuccess()
    {
        $model = new UserModel();
        $data = [
            'user' => $model->paginate(10),
            'user' => $model->viewUserSuccess(),
            'pager' => $model->pager,
        ];
        echo view('dashboard', $data);
    }

    //Get User by fail status
    public function viewUserFail()
    {
        $model = new UserModel();
        $data = [
            'user' => $model->paginate(10),
            'user' => $model->viewUserFail(),
            'pager' => $model->pager,
        ];
        echo view('dashboard', $data);
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
