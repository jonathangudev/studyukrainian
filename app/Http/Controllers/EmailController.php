<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        return view('contact', ['success' => FALSE]);
    }

    public function send()
    {
      $input = request()->all();


      $userEmail = filter_var($input['email']);
      $userMessage = filter_var($input['message']);

      $emailBody = "Email: $userEmail \n Message: $userMessage";

      mail('studyukrainianwebsite@gmail.com', 'User Comment Message', $emailBody, 'From: info@simplang.com');

      return view('contact', ['success' => TRUE]);
    }
}