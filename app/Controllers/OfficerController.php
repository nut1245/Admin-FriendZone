<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OfficerModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API
use CodeIgniter\API\ResponseTrait; // เรียกใช้API

class OfficerController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

    //login
    public function index(){
        helper('form');
        echo view('login');
    }

    //Register
    public function index2(){
        helper('form');
        echo view('register');
    }

    //Register
    public function register() {
        $rules = [
            'userName' => 'required|min_length[6]|max_length[20]',
            'password' => 'required|min_length[6]|max_length[20]',
        ];
        if($this->validate($rules)){
            $model = new OfficerModel();
            $data = [
                'userName' => $this->request->getVar('userName'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'FName' => $this->request->getVar('FName'),
                'LName' => $this->request->getVar('LName'),
                'gender' => $this->request->getVar('gender'),
                'phoneNumber' => $this->request->getVar('phoneNumber'),
                'offImage' => $this->request->getVar('offImage'),
             ];
            if($data){
                 $register = $model->register($data);
                 return redirect()->to('/dashboard');
            }
            }else{
                 $data['validation'] = $this->validator;
                 echo view('register',$data);
             }
    }

    //Login
    public function login() {
        $session = session();
        $model = new OfficerModel();
        $userName = $this->request->getVar('userName');
        $password = $this->request->getVar('password');
        $data = $model->login($userName, $password);
        if ($data) {
            $session->set($data);
            return redirect()->to('dashboard');
        } else {
            $session->setFlashdata('msg', 'ไม่สามารถเข้าสู่ระบบได้ !!!');
            return redirect()->to('/');
        }
    }


    //Logout
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }


}
