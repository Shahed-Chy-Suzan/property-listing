<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyEnquire;
use Flasher\Laravel\Facade\Flasher;

class MessageController extends Controller
{

    public function index()
    {
        $enquires = PropertyEnquire::latest()->paginate(10);
        return view('dashboard.messages.index')->with('enquires',$enquires);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $enquiry = PropertyEnquire::findorFail($id);
        return view('dashboard.messages.view')->with('enquiry',$enquiry);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        PropertyEnquire::findorFail($id)->delete();

        Flasher::addSuccess('Enquiry Deleted');    // Flasher

        return redirect()->route('message.index');
    }
}
