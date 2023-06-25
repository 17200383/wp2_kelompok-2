<?php

namespace App\Controllers;

use App\Models\MedicineModel;

class Admin extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Admin'
        ];

        return view('templates/header', $data)
            .   view('pages/admin', $data)
            .   view('templates/footer', $data);
    }

    public function postAdd()
    {
        $rules = [
            'name' => 'required|max_length[65]',
            'stock' => 'required|integer|max_length[2]'
        ];      

        if (! $this->validate($rules)) {
            $validation = \Config\Services::validation();
            echo implode('<br>', $validation->getErrors());
            return;
        }
        
        $name = $this->request->getPost('name');
        $comments = $this->request->getPost('comments');
        $stock = $this->request->getPost('stock');
    
        $medicine = [
            'name' => $name,
            'comments' => $comments,
            'stock' => $stock   
        ];

        $MedicineModel = new MedicineModel();

        $existname = $MedicineModel->checkExist($name);
        
        if ($existname) {
            $id = $MedicineModel->getId($existname['name']);
            $MedicineModel->updateRow($id, $medicine);
            echo 'Updated!';
            return;
        }
       
        $MedicineModel->resetAutoIncrement();
        $save = $MedicineModel->insert($medicine);
    
        if ($save) {
            echo 'Successful!';
            return;
        } else {
            echo 'Failed!';
            return;
        }
    }
}