@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Company Listing
        <a href="{{ url('companies/create') }}" class="float-right">Create new Company</a>
    </div>
    <div class="card-body">
        <form action="" method="get">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search ...">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Search">
                        <a href="{{ url('companies') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Address</th>
                <th class="text-center">Employes Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website }}</td>
                    <td>{{ $company->address }}</td>
                    <td class="text-center">{{ $company->employes_count }}</td>
                    <td><a href="{{ url('companies/'.$company->id) }}">View Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
