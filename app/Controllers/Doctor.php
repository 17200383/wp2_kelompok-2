<?php

namespace App\Controllers;

use App\Models\PatientModel;
use App\Models\MedicineModel;

class Doctor extends BaseController
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

        $data['title'] = 'Doctor';
        $data['refer'] = 'doctor';

        return view('templates/header', $data)
            .   view('templates/topbar', $data)
            .   view('pages/patient', $data)
            // .   view('pages/doctor', $data)
            .   view('templates/footer', $data);
    }

    public function postAdd()
    {
        $rules = [
            'namepat' => 'required|max_length[65]',
            'telp' => 'max_length[15]',
            'addr' => 'max_length[100]',

        ];      

        if (! $this->validate($rules)) {
            $validation = \Config\Services::validation();
            echo implode('<br>', $validation->getErrors());
            return;
        }
        
        $namepat = $this->request->getPost('namepat');
        $telp = $this->request->getPost('telp');
        $addr = $this->request->getPost('addr');
        $medrec = $this->request->getPost('medrec');
        $medicine = $this->request->getPost('medicine');
    
        $patient = [
            'namepat' => $namepat,
            'telp' => $telp,
            'addr' => $addr,
            'medrec' => $medrec,
            'medicine' => $medicine   
        ];

        $PatientModel = new PatientModel();

        $existname = $PatientModel->checkExist($namepat);
        
        if ($existname) {

            $updateID = $this->request->getPost('update');

            $PatientModel->update($updateID, $patient);  
                      
            echo 'Updated!';
            return redirect()->back();
        }
       
        $PatientModel->resetAutoIncrement();
        $save = $PatientModel->insert($patient);
    
        if ($save) {
            echo 'Successful!';
            return redirect()->back();
        } else {
            echo 'Failed!';
            return;
        }
    }

    public function postUpdate()
    {
        $PatientModel = new PatientModel();
        
        $refer = $this->request->getPost('refer');
    
        if ($refer === 'admin') {

            $deleteID = $this->request->getPost('delete');

            if ($deleteID) {
                $PatientModel->delete($deleteID);
                return redirect()->back();
            }

        } elseif ($refer === 'doctor' || $refer === 'dashboard') {

            $updateID = $this->request->getPost('update');

            $namepat = $this->request->getPost('namepat');
            $telp = $this->request->getPost('telp');
            $addr = $this->request->getPost('addr');
            $medrec = $this->request->getPost('medrec');
            $medicine = $this->request->getPost('medicine');
        
            $patient = [
                'namepat' => $namepat,
                'telp' => $telp,
                'addr' => $addr,
                'medrec' => $medrec,
                'medicine' => $medicine   
            ];

            $PatientModel->update($updateID, $patient);
            return redirect()->back();

        } else {

            echo 'Error: Unknown refer value - ' . $refer;
            return;
        }
    
        echo 'Error: Invalid operation';
        return;
    }

        // $namepat = $this->request->getPost('namepat');
        // $medicine = $this->request->getPost('medicine');
        // $medrec = $this->request->getPost('medrec');

        // $updateMeds = $this->request->getPost('update');
    
        // if ($updateMeds) {

        //     $id = $updateMeds;

        //     $patient = [
        //         'namepat' => $namepat,
        //         'medrec' => $medrec,
        //         'medicine' => $medicine
        //     ];

        //     $PatientModel->update($id, $patient);
        //     return redirect()->back();
            
        // } else {
        //     echo 'Error';
        // }
}
