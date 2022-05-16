<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table = 'report';
    protected $allowedFields = ['reportTitle', 'reportDetail', 'postId', 'userId'];
    protected $primaryKey = 'reportId';


    //Show all Post
    public function viewReport()
    {
        return $this->db->table('report')
            ->select("report.reportId,report.reportTitle,report.reportDetail,users.FName,users.LName,post.imagePost")
            ->join('users', 'report.userId = users.userId')
            ->join('post', 'report.postId = post.postId')
            ->orderBy('reportId', 'ASC')
            ->get()->getResultArray();
    }

    //Delete Report
    public function deleteReport($reportId)
    {
        $this->where('reportId', $reportId)->delete();
        return TRUE;
    }
}
