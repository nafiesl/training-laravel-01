@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Employe Listing
        <a href="{{ url('employes/create') }}" class="float-right">Create new Employe</a>
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
                        <a href="{{ url('employes') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Company</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $employe->company->name }}</td>
                    <td>{{ $employe->first_name }}</td>
                    <td>{{ $employe->last_name }}</td>
                    <td>{{ $employe->phone }}</td>
                    <td>{{ $employe->email }}</td>
                    <td><a href="{{ url('employes/'.$employe->id) }}">View Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
