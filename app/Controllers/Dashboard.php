<?php

namespace App\Controllers;

use App\Models\PatientModel;
use App\Models\MedicineModel;

class Dashboard extends BaseController
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

        $data['title'] = 'Dashboard';
        $data['refer'] = 'dashboard';

        return view('templates/header', $data)
			.	view('templates/topbar',$data)
            .   view('pages/doctor',$data)
            .   view('pages/patient',$data)
            .   view('pages/dashboard', $data)
            .   view('pages/admin', $data)
            .   view('templates/footer', $data);
    }

    public function postUpdate()
    {

        $MedicineModel = new MedicineModel();

        $refer = $this->request->getPost('refer');
    
        if ($refer === 'admin') {

            $deleteID = $this->request->getPost('delete');

            if ($deleteID) {
                $MedicineModel->delete($deleteID);
                return redirect()->back();
            }

        } elseif ($refer === 'dashboard') {

            $updateID = $this->request->getPost('update');

            $name = $this->request->getPost('name');
            $comments = $this->request->getPost('comments');
            $stock = $this->request->getPost('stock');

            $medicine = [
                'name' => $name,
                'comments' => $comments,
                'stock' => $stock
            ];

            $MedicineModel->update($updateID, $medicine);
            return redirect()->back();

        } else {

            echo 'Error: Unknown refer value - ' . $refer;
            return;
        }
    
        echo 'Error: Invalid operation';
        return;
    }

    public function postLogout(){
        session()->remove('logged_in');
        session()->destroy();
        return redirect()->to('login');
    }
}