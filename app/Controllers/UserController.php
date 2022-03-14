<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class UserController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

    //Get all User by userId
    public function viewUser2($id)
    {
        $model = new UserModel();
        $data['user'] = $model->viewUser2($id);
        if ( $data['user']) {
            return view('dataUser', $data);
        }
         else{
             return view('dataUser');
         }
    }
    
    //Get all User
    public function viewUser()
    {
        helper('form');
        $model = new UserModel();
        $data['user'] = $model->viewUser();
        if ( $data['user']) {
            return view('home', $data);
        }
         else{
             return view('home');
         }
        
    }

    //update Status
    public function updateStatus($userId)
    {
        $data = [
            'userId' => $this->request->getPost('userId'),
            'FName' => $this->request->getPost('FName'),
            'LName' => $this->request->getPost('LName'),
            'idCard' => $this->request->getPost('idCard'),
            'idCardImage' => $this->request->getPost('idCardImage'),
            'statusUser' => $this->request->getPost('statusUser'),
            'gender' => $this->request->getPost('gender'),
            'userImage' => $this->request->getPost('userImage'),
            'birthday' => $this->request->getPost('birthday'),
            'address' => $this->request->getPost('address'),
            'province' => $this->request->getPost('province'),
            'district' => $this->request->getPost('district'),
            'subDistrict' => $this->request->getPost('subDistrict'),
            'email' => $this->request->getPost('email'),
            'expIdCard' => $this->request->getPost('expIdCard'),
            'phoneNumber' => $this->request->getPost('phoneNumber'),
        ];
        $this->UserModel->updateStatus($data, $userId);
        return redirect()->to('/');
    }
}
