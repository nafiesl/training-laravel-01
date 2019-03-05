<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $searchKeyword = '%'.$request->get('search').'%';

        $companies = Company::where('name', 'like', $searchKeyword)
            ->orWhere('email', 'like', $searchKeyword)
            ->orWhere('website', 'like', $searchKeyword)
            ->orWhere('address', 'like', $searchKeyword)
            ->withCount('employes')
            ->get();

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

    public function edit($id)
    {
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->website = $request->get('website');
        $company->address = $request->get('address');
        $company->save();

        return redirect('companies/'.$company->id);
    }

    public function destroy($id)
    {
        Company::find($id)->delete();

        return redirect('companies');
    }
}
