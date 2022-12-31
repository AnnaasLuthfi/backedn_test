<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Family_list;
use App\Models\Nationallity;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function home()
    {
        $customer = Customer::with('nationallity')->get;
        return view('user.home',compact('customer'));
    }
    public function createForm()
    {
        return view('user.create');
    }

    public function sendForm(Request $request)
    {
        $customer = new Customer();
        $nation = new Nationallity();
        $family = new Family_list();

        $customer->cst_name = $request->nama;
        $customer->cst_dob = $request->dob;
        $customer->nationallity_id = $request->id;
        $customer->family->fl_name = $request->fl_name;
        $customer->family->fl_dob = $request->fl_dob;

        $customer->nation()->familiy()->save();


        return redirect('user.create');
    }
}
