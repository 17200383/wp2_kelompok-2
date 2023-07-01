<?php

namespace App\Controllers;

use App\Models\MedicineModel;
use App\Models\PatientModel;

class Admin extends BaseController
{
    public function getIndex()
    {
        if (!session('logged_in')) {
            return redirect()->to('login');
        }

        $MedicineModel = new MedicineModel();
        $data['tableData'] = $MedicineModel->findAll();
        $data['items'] = $MedicineModel->findAll();

        $PatientModel = new PatientModel();
        $data['tableData2'] = $PatientModel->findAll();
       
        $data['title'] = 'Admin';
        $data['refer'] = 'admin';

        return view('templates/header', $data)
            .   view('templates/topbar', $data)
            .   view('pages/patient', $data)
            .   view('pages/doctor', $data)
            .   view('pages/dashboard', $data)
            .   view('pages/admin', $data)
            .   view('templates/footer', $data);
    }

    public function postAdd()
    {
        $rules = [
            'name' => 'required|max_length[65]',
            'stock' => 'required|integer|max_length[11]'
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
            return redirect()->back();
        }
       
        $MedicineModel->resetAutoIncrement();
        $save = $MedicineModel->insert($medicine);
    
        if ($save) {

            echo 'Successful!';
            return redirect()->back();
            
        } else {

            echo 'Failed!';
            return;
        }
    }
}