<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return View('index.html');
    }
}