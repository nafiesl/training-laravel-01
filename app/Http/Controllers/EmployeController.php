<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(Request $request)
    {
        $searchKeyword = '%'.$request->get('search').'%';

        $employes = Employe::where('first_name', 'like', $searchKeyword)
            ->orWhere('last_name', 'like', $searchKeyword)
            ->orWhere('email', 'like', $searchKeyword)
            ->orWhere('phone', 'like', $searchKeyword)
            ->get();

        return view('employes.index', compact('employes'));
    }

    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->first_name = $request->get('first_name');
        $employe->last_name = $request->get('last_name');
        $employe->email = $request->get('email');
        $employe->phone = $request->get('phone');
        $employe->save();

        return redirect('employes');
    }

    public function show($id)
    {
        $employe = Employe::find($id);

        return view('employes.show', compact('employe'));
    }

    public function edit($id)
    {
        $employe = Employe::find($id);
        $companies = Company::all();

        return view('employes.edit', compact('employe', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $employe = Employe::find($id);
        $employe->company_id = $request->get('company_id');
        $employe->first_name = $request->get('first_name');
        $employe->last_name = $request->get('last_name');
        $employe->email = $request->get('email');
        $employe->phone = $request->get('phone');
        $employe->save();

        return redirect('employes/'.$employe->id);
    }

    public function destroy($id)
    {
        Employe::find($id)->delete();

        return redirect('employes');
    }
}
