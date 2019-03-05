@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                {{ $employe->first_name }} {{ $employe->last_name }} detail
                <a href="{{ url('employes/'.$employe->id.'/edit') }}" class="float-right">Edit</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Company</th>
                            <td>{{ $employe->company->name }}</td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td>{{ $employe->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>{{ $employe->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $employe->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $employe->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="float-right">
            <form action="{{ url('employes/'.$employe->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure to delete this employe?');">
                {{ csrf_field() }} {{ method_field('DELETE') }}
                <button class="btn btn-danger">Delete Employe</button>
            </form>
            <a href="{{ url('employes') }}" class="btn btn-secondary">Back to Employe List</a>
        </div>
    </div>
</div>

@endsection
