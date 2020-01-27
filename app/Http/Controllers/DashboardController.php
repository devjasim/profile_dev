<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::all();
        return view('dashboard', $data);
    }
}
