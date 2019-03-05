@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Edit data {{ $employe->first_name }} {{ $employe->last_name }}</div>
            <form action="{{ url('employes/'.$employe->id) }}" method="post">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="company_id" class="form-label">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                                <option value="">-- Select one company --</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}" {{ $company->id == $employe->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $employe->first_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="form-label">First Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $employe->last_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $employe->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $employe->email }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-info">
                    <a href="{{ url('employes/'.$employe->id) }}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </form>
        </div>

    </div>
    <div class="col-6">
        <div class="alert alert-info">
            Silakan isi formulir disamping untuk edit employe {{ $employe->first_name }} {{ $employe->last_name }}.
        </div>
    </div>
</div>

@endsection
