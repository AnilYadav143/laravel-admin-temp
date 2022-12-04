<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * this function will call admin dashboard
     */
    function dashboard(){
        return view('admin/dashboard');
     }
     /**
      * this function will call admin dashboard
      */
    function appointment(){
         return view('admin/appointment');
      }
    function registration(){
        return view('admin/registration');
     }
    function login(){
        return view('admin/login');
    }
    function storeavailability(){
        return view('admin/storeavailability');
    }
    function create_mother_id(){
        return view('admin/create_mother_id');
    }
    function childId_income(){
        return view('admin/childId_income');
    }
    function childId_digital(){
        return view('admin/childId_digital');
    }
    function firm_motherID(){
        return view('admin/firm_motherID');
    }
    function motherID_transaction(){
        return view('admin/motherID_transaction');
    }
}
