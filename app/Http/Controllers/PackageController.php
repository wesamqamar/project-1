<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index()
    {
        $packageList = Package::query()->orderByDesc('id')->get();

        return view('package.index', compact('packageList'));
    }

    public function createPackage()
    {
        return view('package.create');
    }

    public function addPackage(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'package_price' => 'required|numeric',
        ], [
            'package_name.required' => 'يجب ادخال حقل الاسم',
            'package_price.required' => 'يجب ادخال حقل السعر',
            'package_price.numeric' => 'يجب ادخال قيمة السعر ليست صحيحة',
        ]);

        Package::query()->create([
            'name' => $request->package_name,
            'price' => $request->package_price,
            'status' => $request->package_status == 'on' ? 1 : 0
        ]);

        return redirect('package');
    }

    public function editPackage($id)
    {

        $test = Package::query()->where('id', $id)->first();

        return view('package.edit', compact('test'));
    }

    public function updatePackage($id, Request $request)
    {
        $request->validate([
            'package_name' => 'required'
        ]);

        $package = Package::query()->where('id', $id)->first();

        $package->update([
            'name' => $request->package_name,
            'price' => $request->package_price,
            'status' => $request->package_status == 'on' ? 1 : 0
        ]);

        return redirect('package');
    }

    public function deletePackage($id)
    {
        $package = Package::query()->where('id', $id)->first();

        $package->delete();

        return redirect('/package');
    }
}
