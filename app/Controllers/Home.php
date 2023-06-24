<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = db_connect();
    
        $data = [
            'title' => 'Welcome',
            'dbstatus' => 'Not connected'
        ];
        
        if ($db->query('SELECT 1')->getRow()) {
            $data['dbstatus'] = 'Connected';
        }
    
        return view('templates/header', $data)
            . view('pages/welcome', $data)
            . view('templates/footer', $data);
    }       
}
