<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SampleController extends BaseController
{
    public function index()
    {
        return view('welcome_message'); 
    }
}
