<?php namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model{
    protected $table = 'review';
    protected $allowedFields = ['detail_review','point','userId','postId'];
    protected $primaryKey = 'id_review';

    public function viewReview()
    {
        return $this->db->table('review')
        ->join('users','review.userId = users.userId')
        ->get()->getResultArray();
    }


}


?>