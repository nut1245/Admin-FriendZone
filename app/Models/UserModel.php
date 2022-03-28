<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userId', 'FName', 'LName', 'userName', 'password', 'idCard', 'idCardImage', 'statusUser', 'gender', 'userImage', 'birthday', 'address', 'province', 'district', 'subDistrict', 'email', 'expIdCard', 'phoneNumber'];
 

    //show User
    public function viewUser($page)
    {
        return $this->select()
        ->join('provinces','users.province = provinces.id')
        ->join('amphures','users.district = amphures.id')
        ->join('districts','users.subDistrict = districts.id')
        ->orderBy('userId', "ASC")
        ->paginate(10,'pages',$page);
        //->get()->getResultArray();
    }

    //show User by edit status
    public function viewUserEdit()
    {
        $data = $this->where('statusUser', "2")->findAll();
        return $data;
    }

    //show User by success status
    public function viewUserSuccess()
    {
        $data = $this->where('statusUser', "1")->findAll();
        return $data;
    }

    //show User by fail status
    public function viewUserFail()
    {
        $data = $this->where('statusUser', "0")->findAll();
        return $data;
    }

    
    
    
   
    
    

} 