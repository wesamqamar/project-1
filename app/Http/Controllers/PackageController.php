<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index()
    {
        $packageList = Package::all();

        return view('package.index', compact('packageList'));
    }

    public  function  createPackage()
    {
        return view('package.create');
    }
    public  function addPackage(Request $request)
    {
        dd($request->all());
    }
}
