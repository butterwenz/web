<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $model = model(HomeModel::class);

        $data['songs'] = $model -> getSongList();
         // Debug: 检查获取到的数据
        //  var_dump($data['songs']);
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
