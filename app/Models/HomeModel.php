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
    public function loginUser($account, $password){
        $md5Password=md5($password);
        $builder = $this->db->table('user');
        $user = $builder->where('account', $account)
        ->where('user_au4a83',$md5Password)
        ->get()
        ->getRow();
        if ($user) {
            // 密碼驗證成功
            return $user;
        } else {
            // 密碼驗證失敗或使用者不存在
            return null;
        }
    }
    public function saveUser($name,$account, $password){
        
        $md5Password = md5($password);
        $time = date('Y-m-d H:i:s');
        $data = [
            'account' => $account,
            'user_name' => $name,
            'user_au4a83' => $md5Password,
            'registration_date' =>  $time 
        ];
        $builder = $this->db->table('user');
        return $builder->insert($data);


    }

}