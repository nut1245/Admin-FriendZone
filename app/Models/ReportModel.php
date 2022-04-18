<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model{
    protected $table = 'report';
    protected $allowedFields = ['reportId', 'reportTitle', 'reportDetail', 'postId', 'userId'];
    protected $primaryKey = 'reportId';

 
    public function viewReport()
    {
        $data = $this->orderby('reportId', 'desc')->findAll();
        return $data;
    }

   
}
