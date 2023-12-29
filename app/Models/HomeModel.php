<?php
namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    public function getSongList(){
 
        $builder = $this->db->table('video');
        $builder->select('video.*, GROUP_CONCAT(feat.singer SEPARATOR "．") AS singers');
        $builder->join('feat', 'feat.video_id = video.video_id', 'left');
        $builder->groupBy('video.video_id');
        $builder->orderBy('video.video_id', 'DESC');
        
        $query = $builder->get();
        return $query->getResultArray();
    }

}