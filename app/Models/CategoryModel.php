<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'category';
    protected $allowedFields = ['name_category'];
    protected $primaryKey = 'categoryId';


    //Show All Category
    public function showCategory()
    {
        $data = $this->orderby('categoryId', 'ASC')->findAll();
        return $data;
    }

    //Save Category
    public function insertCategory($Categoey)
    {
        $this->insert($Categoey);
        return TRUE;
    }

    //Delete Category
    public function deleteCategory($categoryId)
    {
        $this->where('categoryId', $categoryId)->delete();
        return TRUE;
    }
}
