<?php

namespace App\Models;

use CodeIgniter\Model;

class OfficerModel extends Model{
    protected $table = 'officer';
    protected $allowedFields = ['FName', 'LName', 'userName', 'password', 'gender', 'offImage', 'phoneNumber'];
    protected $primaryKey = 'offId';


    public function register($data)
    {
        $this->save($data);
        return TRUE;
    }

    public function login($userName,$password){
        $data = $this->where('userName', $userName)->first();
        $set_data = [];
        if($data){
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if($verify_password){
                $set_data = [
                    'offId ' => $data['offId'],
                    'FName' => $data['FName'],
                    'LName' => $data['LName'],
                    'offImage' => $data['offImage'],
                ];
                return $set_data;
            }else{
                return $set_data;
            }

        }else{
            return $set_data;
        } 
    }
}
