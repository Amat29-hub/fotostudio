<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBackendController extends Controller
{
    //index view
    public function index(){
    $members = \App\Models\Member::all();
    return view('page.backend.dashboard.index', compact('members'));
  }
}
