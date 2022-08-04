<?php namespace App\Models;

use CodeIgniter\Model;

class ParticModel extends Model{
    protected $table = 'participate';
    protected $allowedFields = ['partId','statusPart','userId_user','postId_post'];
    protected $primaryKey = 'partId';


    public function viewProfilePartic()
    {
        return $this->db->table('participate')
        ->join('users','participate.userId_user = users.userId')
        ->orderBy('partId','ASC' )
        ->where('statusPart','1')
        ->get()->getResultArray();
    }

   
}


?>