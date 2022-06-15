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

        //var_dump($data);
        echo view('reportPost', $data);
    }

    //Show all PostUser
    public function viewPost()
    {
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewPost();
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom->viewComment();
        // var_dump($datapost);
        return view('postmanage', $datapost);
    }

    //Show all PostUser (Open)
    public function viewPostOpen()
    {
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewPostOpen();
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom->viewComment();
        // var_dump($datapost);
        return view('postmanage', $datapost);
    }

     //Show all PostUser (Close)
     public function viewPostClose()
     {
         $modelpost = new PostModel();
         $datapost['posts'] = $modelpost->viewPostClose();
         $modelCom = new CommentModel();
         $datapost['comments'] = $modelCom->viewComment();
         // var_dump($datapost);
         return view('postmanage', $datapost);
     }

    //Delete Report
    public function deleteReport($id = null)
    {
        $session = session();
        $model = new ReportModel();
        $deleteReport = $model->deleteReport($id);
        if ($deleteReport) {
            $session->setFlashdata('Success', 'ลบรายงานสำเร็จ');
            return redirect()->to('/reportpost');
        }
    }
}
