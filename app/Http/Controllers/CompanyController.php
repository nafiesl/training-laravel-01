<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $company = new Company;
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->website = $request->get('website');
        $company->address = $request->get('address');
        $company->save();

        return redirect('companies');
    }

    public function show($id)
    {
        $company = Company::find($id);

        return view('companies.show', compact('company'));
    }
}
