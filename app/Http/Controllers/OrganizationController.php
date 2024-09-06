<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
{
    $organizations = Organization::all();
    return view('auth.organizations', compact('organizations')); // Ensure 'organizations.index' is correct
}


    public function store(Request $request)
    {
        // $organization = $request->validate([
        //     'name' => 'required|string|max:255',
        //     // 'established_date' => 'required|date',
        //     'department' => 'numeric',
        //     'logo' => 'required|image',
        //     'status' => 'required|boolean',
        //     'description' => 'required|string',
        // ]); 

        // return dd($request);

        $organization = Organization::create([
            "name" => $request->name,
            "category" => $request->department,
            "is_national" => $request->is_national == "on" ? 1 : 0,
            "description" => $request->description,
        ]);

        $organization->save();

        // $organization = new Organization();
        // $organization->name = $request->input('name');
        // $organization->established_date = $request->input('established_date');
        // $organization->department = $request->input('department');
        // $organization->status = $request->input('status');
        // $organization->description = $request->input('description');

        // if ($request->hasFile('logo')) {
        //     $file = $request->file('logo');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('logos'), $filename);
        //     $organization->logo = $filename;
        // }

        // $organization->save();

        return redirect()->route('organizations')->with('success', 'Organization added successfully!');
    }
}
