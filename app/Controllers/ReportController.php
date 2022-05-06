<?php

namespace App\Controllers;

use App\Models\ReportModel;
use App\Models\PostModel;
use App\Models\CommentModel;

//------------------------Manage all users---------------------------------
class ReportController extends BaseController
{

    //Get all Report
    public function viewReport()
    {
        $model = new ReportModel();
        $data = [
            'report' => $model->viewReport(),
        ];
        echo view('reportPost', $data);
    }
    public function viewPost()
    {
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewPost();
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom ->viewComment();
        // var_dump($datapost);
        return view('postmanage', $datapost);
    }
}
