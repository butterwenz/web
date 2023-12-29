<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new HomeModel();
        $data['songs'] = $model->getSongList();

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
