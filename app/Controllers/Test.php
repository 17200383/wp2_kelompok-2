<?php

namespace App\Controllers;

use App\Models\TestModel;

class Test extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'TEST'
        ];

        return view('templates/header', $data)
            .   view('templates/testlogin', $data)
            .   view('templates/testadd', $data)
            .   view('templates/testread', $data)
            .   view('templates/footer', $data);
    }

    public function postLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $TestModel = new TestModel();

        $user = $TestModel->verifyTest($username);

        if ($user && password_verify($password, $user['password'])) {
            echo 'Successful!';
            return;
        } else {
            echo 'Failed!';
            return;
        }
    }

    public function postAdd()
    {
        $rules = [
            'username' => 'required|max_length[65]',
            'password' => 'required|min_length[4]',
            'privilege' => 'required|integer|max_length[1]'
        ];      

        if (! $this->validate($rules)) {
            $validation = \Config\Services::validation();
            echo implode('<br>', $validation->getErrors());
            return;
        }
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $privilege = $this->request->getPost('privilege');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $user = [
            'username' => $username,
            'password' => $hashedPassword,
            'privilege' => $privilege   
        ];

        $TestModel = new TestModel();

        $username = $TestModel->verifyTest($username);
        if ($username) {
            echo 'User already exists!';
            return;
        }
       
        $TestModel->resetAutoIncrement();
        $save = $TestModel->insert($user);
    
        if ($save) {
            echo 'Successful!';
            return;
        } else {
            echo 'Failed!';
            return;
        }
    }

    public function postRead()
    {
        $username = $this->request->getPost('username');
        $colname = $this->request->getPost('colname');
    
        $TestModel = new TestModel();
    
        $record = $TestModel->readTest($username, $colname);
    
        if ($record) {
            echo $record->$colname;
        } else {
            echo 'Record not found.';
        }
    
        return;
    }
    

    //     $records = $TestModel->where('username', $username)->findAll();

    //     foreach ($records as $record) {
    //         echo $record['password'] . '<br>';
    //     }
        
    //     $records = $TestModel->findAll();

    //     foreach ($records as $record) {
    //         if ($record['username'] === $username) {
    //             print_r($record);
    //             echo '<br>';
    //         }
    //     }
    //     return;

    // $errors = [
    //     'required' => '{field} is required.',
    //     'integer' => '{field} must be an integer.',
    //     'min_length' => '({value}) for {field} must have at least {param} characters.',
    //     'max_length' => '({value}) for {field} must have less than {param} characters.'
    // ];  
}
