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
            ->select("report.postId,report.reportId,report.reportTitle,report.reportDetail,users.FName,users.LName,post.imagePost,users.userImage,users.FName,users.LName,post.postTitle,post.date_start,post.date_end,name_category,detailPost,num_people,expenses,name_th,name_th_am,name_th_dis,note")
            ->join('users', 'report.userId = users.userId')
            ->join('post', 'report.postId = post.postId')
            ->join('category', 'post.categoryId = category.categoryId')
            ->join('provinces', 'post.province = provinces.id')
            ->join('amphures', 'post.district = amphures.id')
            ->join('districts', 'post.subDistrict = districts.id')
            ->get()->getResultArray();
    }

    //Delete Report
    public function deleteReport($reportId)
    {
        $this->where('reportId', $reportId)->delete();
        return TRUE;
    }
}
