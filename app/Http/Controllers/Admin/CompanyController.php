<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function update(Request $request)
    {

        // dd($request->all());exit;
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'postal_code' => 'nullable|string|max:20',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,ico,webp|max:1024',
        ]);
    
        $company = Company::first(); 
    
        if (!$company) {
            $company = new Company();
        }
    
        $company->fill($validated);
    
        if ($request->hasFile('icon')) {
            $iconFile = $request->file('icon');
            $iconName = time() . '_icon.' . $iconFile->getClientOriginalExtension();
            $iconFile->move(public_path('company'), $iconName);
            $company->icon = 'company/' . $iconName;
        }
        
        if ($request->hasFile('favicon')) {
            $faviconFile = $request->file('favicon');
            $faviconName = time() . '_favicon.' . $faviconFile->getClientOriginalExtension();
            $faviconFile->move(public_path('company'), $faviconName);
            $company->favicon = 'company/' . $faviconName;
        }
        
    
        $company->save();
    
        return redirect()->back()->with('success', 'Company info updated.');
    }


    public function updateaccounts(Request $request)
    {
        // dd($request->all());
        $company = Company::first() ?? new Company();

        $company->meta_title = $request->meta_title;
        $company->meta_description = $request->meta_description;

        $company->facebook = $request->facebook;
        $company->twitter = $request->twitter;
        $company->instagram = $request->instagram;
        $company->youtube = $request->youtube;
        $company->linkedin = $request->linkedin;
        $company->tiktok = $request->tiktok;


        $company->save();

        return redirect()->back()->with('success', 'Company Accounts updated successfully.');
    }

    public function edit()
{
    $company = Company::first(); // or findOrFail($id)
    return view('your-view-file', compact('company'));
}

}
 