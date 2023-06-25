<?php

namespace App\Controllers;

use App\Models\MedicineModel;

class Dashboard extends BaseController
{
    public function getIndex()
    {
        $MedicineModel = new MedicineModel();
        $data['tableData'] = $MedicineModel->findAll();
        $data['title'] = 'Dashboard';

        return view('templates/header', $data)
            .   view('pages/dashboard', $data)
            .   view('templates/footer', $data);
    }
}