<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function getindex()
    {
        // Load the view 'my_view' and pass data to it
        $data = [
            'title' => 'My View',
            'message' => 'Hello, world!'
        ];

        return view('test', $data);
    }
}
