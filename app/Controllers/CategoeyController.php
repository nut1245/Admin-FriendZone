<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
//------------------------Manage all users---------------------------------
class CategoeyController extends ResourceController
{
    use RequestTrait;
    //Show all Category
    public function showCategory()
    {
        helper('form');
        $model = new CategoryModel();
        $data = [
            'category' => $model->showCategory(),
        ];
        return view('category', $data);
    }

    //Save Category
    public function insertCategory()
    {
        $session = session();
        $data = [
            'name_category' => $this->request->getVar('name_category'),

        ];
        //var_dump($data);
        $model = new CategoryModel();
        $insertCategory = $model->insertCategory($data);
        if ($insertCategory) {
            $session->setFlashdata('Success', 'เพิ่มหมวดหมู่สำเร็จ');
            return redirect()->to('/category');
        }
    }

    //Delete Category
    public function deleteCategory($id = null)
    {
        $session = session();
        $model = new CategoryModel();
        $deleteCategory = $model->deleteCategory($id);
        if ($deleteCategory) {
            $session->setFlashdata('Success', 'ลบหมวดหมู่สำเร็จ');
            return redirect()->to('/category');
        }
    }
}
