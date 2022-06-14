<?php

namespace App\Controllers;

use App\Models\NotificationModel;
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
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUser($page),
            'user1' => $model->paginate(10, 'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }


    //Get User by success status
    public function viewUserSuccess()
    {
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserSuccess($page),
            'user1' => $model->paginate(10, 'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }


    //Get User by fail status
    public function viewUserFail()
    {
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserFail($page),
            'user1' => $model->paginate(10, 'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }


    //Get User by edit status
    public function viewUserEdit()
    {
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserEdit($page),
            'user1' => $model->paginate(10, 'pages'),
            'pager' => $model->pager,
        ];
        echo view('alluser', $data);
    }

    //Get User Block
    public function viewUserBlock()
    {
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        $data = [
            'user' => $model->viewUserBlock($page),
            'user1' => $model->paginate(10, 'pages'),
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
        $dataNoti = [
            'notificateDetail' => "ได้ผ่านการยืนยันตัวตนเรียบร้อยแล้วสามารถโพสต์หาเพื่อนร่วมกิจกรรมหรือส่งคำขอเข้าร่วมกิจกรรมได้เลย!!",
            'statusNotic' => "0",
            'userId' => $userId,
        ];
        $NotificationModel = new NotificationModel($notificate);
        $NotificationModel->insertNotification($dataNoti);
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        $session->setFlashdata('Success', 'ยืนยันตัวตนสำเร็จ');
        return redirect()->to('/alluser');
    }

    //update Status Fail
    public function updateStatusFail($userId)
    {
        $session = session();
        $status = "2";
        $data = [
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        $session->setFlashdata('Success', 'รอการแก้ไขตัวตน');
        return redirect()->to('/alluser');
    }



    //Get all User in manageUser
    public function viewAllUser()
    {
        $page = $this->request->getGet('pages');
        $model = new \App\Models\UserModel();
        if ($this->request->getGet('search')) {
            $search = $this->request->getGet('search');
            $data = [
                'user' => $model->like('idCard', $search)->findAll(),($page),
                'user1' => $model->paginate(10, 'pages'),
                'pager' => $model->pager,
            ];
        } else {
            $data = [
                'user' => $model->viewUser($page),
                'user1' => $model->paginate(10, 'pages'),
                'pager' => $model->pager,
            ];
        }
        echo view('allusermanage', $data);

        
    }


    //blockUser
    public function blockUser($userId)
    {
        $session = session();
        $status = "3";
        $data = [
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        $session->setFlashdata('Success', 'ผู้ใช้รายนี้ถูกบล็อก');
        return redirect()->to('/allusermanage');
    }

    //UnblockUser
    public function UnblockUser($userId)
    {
        $session = session();
        $status = "1";
        $data = [
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        $session->setFlashdata('Success', 'ปลดบล็อกผู้ใช้รายนี้');
        return redirect()->to('/allusermanage');
    }
}
