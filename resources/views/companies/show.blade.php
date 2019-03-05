@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                {{ $company->name }} detail
                <a href="{{ url('companies/'.$company->id.'/edit') }}" class="float-right">Edit</a>
            </div>
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
        <div class="text-right">
            <form action="{{ url('companies/'.$company->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure to delete this company?');">
                {{ csrf_field() }} {{ method_field('DELETE') }}
                <button class="btn btn-danger">Delete Company</button>
            </form>
            <a href="{{ url('companies') }}" class="btn btn-secondary">Back to Company List</a>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Employe List</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($company->employes as $employe)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $employe->first_name }} {{ $employe->last_name }}</td>
                            <td>{{ $employe->phone }}</td>
                            <td>{{ $employe->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No employe in this company.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
