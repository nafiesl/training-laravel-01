@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">{{ $company->name }} detail</div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $company->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $company->email }}</td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td>{{ $company->website }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $company->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-7">
        <a href="{{ url('companies') }}" class="btn btn-secondary float-right">Back to Company List</a>
    </div>
</div>

@endsection
