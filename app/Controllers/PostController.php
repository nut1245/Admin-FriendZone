<?php

namespace App\Controllers;

use App\Models\ReportModel;
use App\Models\PostModel;
use App\Models\CommentModel;
Use App\Models\ParticModel;
Use App\Models\ReviewModel;

//------------------------Manage all users---------------------------------
class PostController extends BaseController
{

    //Get all Report
    public function viewReport()
    {
        $model = new ReportModel();
        $data = [
            'report' => $model->viewReport(),
        ];

        // var_dump($data);
        echo view('reportpost', $data);
    }

    //Show all PostUser
    public function viewPost()
    {
        $modelPart = new ParticModel();
        $datapost['partsProfile'] = $modelPart->viewProfilePartic();
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
        $modelPart = new ParticModel();
        $datapost['partsProfile'] = $modelPart->viewProfilePartic();
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
        $modelPart = new ParticModel();
        $datapost['partsProfile'] = $modelPart->viewProfilePartic();
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

    public function reviewPost()
    {
        $modelReview = new ReviewModel();
        $datapost['reviews'] = $modelReview->viewReview();
        $modelPart = new ParticModel();
        $datapost['partsProfile'] = $modelPart->viewProfilePartic();
        $modelpost = new PostModel();
        $datapost['postreviews'] = $modelpost->viewPostReview();
        //var_dump($datapost['partsProfile']);
        echo view('reviewpost',$datapost);
    }
}
