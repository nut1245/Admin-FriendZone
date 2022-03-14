<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userId', 'FName', 'LName', 'userName', 'password', 'idCard', 'idCardImage', 'statusUser', 'gender', 'userImage', 'birthday', 'address', 'province', 'district', 'subDistrict', 'email', 'expIdCard', 'phoneNumber'];

    //show User
    public function viewUser()
    {
        $data = $this->orderBy('userId', "ASC")->findAll();
        return $data;
    }

    //show User by userId
    public function viewUser2($id)
    {
        $data = $this->where('userId',$id)->findAll();
        return $data;
    }

    //update Status
    public function updateStatus($data, $userId)
    {
        return $this->db->table('users')->update($data, array('userId' => $userId));
    }

    
    

} 