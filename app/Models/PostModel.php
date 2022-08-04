<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{
    protected $table = 'post';
    protected $allowedFields = ['postTitle','imagePost','detailPost','note','num_people','expenses','province','district','subDistrict','date_start','date_end','statusPost','userId','categoryId','userId_user'];
    protected $primaryKey = 'postId';

    public function viewPost()
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->orderBy('postId','DESC' )
        ->get()->getResultArray();
    }

    public function viewPostOpen()
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->orderBy('postId','DESC' )
        ->where('statusPost','1')
        ->get()->getResultArray();
    }

    public function viewPostClose()
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->orderBy('postId','DESC' )
        ->where('statusPost','0')
        ->get()->getResultArray();
    }

    public function viewPostReview()
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->orderBy('postId','DESC' )
        ->where('statusPost','0')
        ->get()->getResultArray();
    }

}

?>