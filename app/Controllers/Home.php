<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->table('video')
        ->select('video.*, GROUP_CONCAT(feat.singer SEPARATOR "．") AS singers')
        ->join('feat', 'feat.video_id = video.video_id', 'left')
        ->groupBy('video.video_id')
        ->orderBy('video_id', 'DESC')
        ->get();
        

        $data['songs'] =  $query->getResultArray();

        return view('home',$data);
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function addsong()
    {
        return view('addsong');
    }
    public function SongPage()
    {
        return view('SongPage');
    }
    public function addUesr_model()
    {
        if($_POST){
            $model = new NewsModel();
            $model->save([
                'title' => $this->request->getVar('title'),
                'content'  => $this->request->getVar('content'),
            ]);
            return redirect()->to(base_url('news')); 
        }else{
            return view('form');
        }
    }
}
