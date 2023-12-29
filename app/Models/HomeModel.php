<?php
namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    protected $table='video';
    // read
    public function getSongList($id = false){
 
        if($id===false){
            return $this->orderBy('video_id', 'desc')->findAll();
        }else{
            return $this->getWhere(['video_id' => $id])->first();
        }
    }

}