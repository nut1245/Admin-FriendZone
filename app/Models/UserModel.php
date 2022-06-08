<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userId', 'FName', 'LName', 'userName', 'password', 'idCard', 'idCardImage', 'statusUser', 'gender', 'userImage', 'birthday', 'address', 'province', 'district', 'subDistrict', 'email', 'expIdCard', 'phoneNumber'];


    //show User
    public function viewUser($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->orderBy('userId', "ASC")
            ->paginate(10, 'pages', $page);
        //->get()->getResultArray();
    }

    //show User by success status
    public function viewUserSuccess($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->where('statusUser', "1")
            ->paginate(10, 'pages', $page);
    }


    //show User by edit status
    public function viewUserFail($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->where('statusUser', "0")
            ->paginate(10, 'pages', $page);
    }


    //show User by edit status
    public function viewUserEdit($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->where('statusUser', "2")
            ->paginate(10, 'pages', $page);
    }

    //show User Block
    public function viewUserBlock($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->where('statusUser', "3")
            ->paginate(10, 'pages', $page);
    }

    //show User in manageUser
    public function viewAllUser($page)
    {
        return $this->select()
            ->join('provinces', 'users.province = provinces.id')
            ->join('amphures', 'users.district = amphures.id')
            ->join('districts', 'users.subDistrict = districts.id')
            ->orderBy('userId', "ASC")
            ->paginate(10, 'pages', $page);
        //->get()->getResultArray();
    }
}
