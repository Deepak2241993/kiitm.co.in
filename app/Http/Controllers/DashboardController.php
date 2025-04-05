<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class DashboardController extends Controller
{
     public function index(){
      $contactenquiry =Enquiry::where('status',1)->take(10)->get();
        return view('admin.dashboard',compact('contactenquiry'));
     }

   
    


}
