<?php

namespace App\Controllers;

use App\Models\UserModel;

class Blog extends BaseController
{

    public function index()
    {
        return view('welcome_message');

    }

    public function register()
    {
        return view('Login/register');
    }
    public function userList()
    {
        $user = new UserModel();

        $data['user'] = $user->getUser();
        return view('Login/list', $data);

    }

    public function insertRecord()
    {


        $user = new UserModel();

        $rules = $user->validationRules;

        if (!$this->validate($rules)) {

            $file = $this->request->getFile('pic');
            $name = $file->getBasename();
            $size = $file->getSize();
            $ext = $file->getExtension();
            $newName = $file->getRandomName();
            $file->move("upload", $newName);

            $data = [
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash(
                    $this->request->getVar('password'),
                    PASSWORD_DEFAULT
                ),
                'pic' => $newName
            ];



            $user->save($data);
            $session = session();

            $session->setFlashdata('insert', 'Data Inserted Successfully');
            return redirect('login');

        } else {
            print_r($user->validationMessages);
        }


        // $user = $user->insertRec();


    }

    public function update($id)
    {
        $user = new UserModel();
        $data['user'] = $user->find($id);

        return view('Login/Update', $data);

    }
    public function edit()
    {
        $user = new UserModel();

        $id = $this->request->getVar('id');
        $current_pic = $this->request->getVar('current_pic');
        $file = $this->request->getFile('pic');
        $newName = $file->getRandomName();

        if ($file->isValid()) {
            $file->move("upload", $newName);
            if (file_exists('upload/' . $current_pic)) {
                unlink('upload/' . $current_pic);
            }
        } else {
            $newName = $current_pic;
        }

        $data = [
            'fname' => $this->request->getVar('fname'),
            'lname' => $this->request->getVar('lname'),
            'password' => password_hash(
                $this->request->getVar('password'),
                PASSWORD_DEFAULT
            ),
            'pic' => $newName
        ];



        $update = $user->update($id, $data);

        if ($update) {
            return redirect('list');
        } else {
            echo "Data Not Updated";
        }
    }

    public function login()
    {
        return view('Login/login');
    }
    public function login_validate()
    {
        $user = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $remember = $this->request->getVar('remember_me');

        $data = $user->where('email', $email)->first();

        //set_cookie("email", $email, 3600);
        //set_cookie("password", $password, 3600);
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify(trim($password), $pass);

            if ($verify_pass) {
                $session = session();
                $session->set('uname', $data['fname']);

                if ($remember == 'rem') {
                    set_cookie('email', $email, 3600);
                    set_cookie('password', $password, 3600);
                }
                return redirect()->to('list');
            }
        } else {
            return redirect()->to('login');
        }

        //remember me functionality in codeigniter 4 
    }

    public function delete($id)
    {
        $user = new UserModel();
        $data = $user->find($id);

        //Delete Image from Folder
        $img = $data['pic'];
        unlink('upload/' . $img);

        $user->delete($id);

        return redirect('list');
    }

    public function logout()
    {
        $session = session();
        session()->destroy();

        return redirect()->to('/login');
    }

}


?>