<?php

namespace App\Controllers;

use App\Models\ReportModel;

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
}
