<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new HomeModel();
        $data['songs'] = $model->getSongList();
        $session = session();
        if ($session->get('isLoggedIn')) {
            
            $userName = $session->get('userName');
            $account  = $session->get('account');
            // 將Session資料傳遞給View
            $data['userData'] = [
                'userName' =>  $userName,
                'account' => $account
            ];
        }
        return view('home',$data);
    }

    public function login()
    {
        return view('login');
    }
    public function login_model()
    {
        if($_POST){
            $session = session();
            $account = $this->request->getPost('loginUsername');
            $password = $this->request->getPost('loginPassword');


            $homeModel = new HomeModel();
            $user=$homeModel->loginUser($account, $password);
            if($user != NULL){
                $session->set('isLoggedIn', true);
                $session->set('userName',  $user->user_name);
                $session->set('account',  $user->account);
                return redirect()->to(base_url());
            }else{
                return redirect()->to(base_url());
            }
        }
        

    }
    public function logout()
    {
        $session = session();

        // 登出並清除 session 資料
        $session->remove('isLoggedIn');
        $session->remove('userName');
        $session->remove('account');
        return redirect()->to(base_url());
    }
    public function register()
    {
        return view('register');
    }
    public function register_model()
    {       
        if($_POST){
            $name = $this->request->getPost('registerName');
            $account = $this->request->getPost('registerUsername');
           echo $password = $this->request->getPost('registerPassword');
            

            $homeModel = new HomeModel();
            if($homeModel->saveUser($name, $account, $password)){
                $session = session();
                $session->set('isLoggedIn', true);
                $session->set('userName',  $name);
                $session->set('account',  $account);
            } 

        }
        return redirect()->to(base_url());
    }
    public function addsong()
    {
        return view('addsong');
    }
    public function SongPage($id = null)
    {
        return view('SongPage');
    }
}
