<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Alert::success('Success', 'mantap');
        return view('admin.pages.admin_dashboard', [
            'title' => 'Dashboard',
        ]);
    }
}
