@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Create new Employe</div>
            <form action="{{ url('employes') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="company_id" class="form-label">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                                <option value="">-- Select one company --</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-info">
                    <a href="{{ url('employes') }}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </form>
        </div>

    </div>
    <div class="col-6">
        <div class="alert alert-info">
            Silakan isi formulir disamping untuk membuat employe baru.
        </div>
    </div>
</div>


@endsection
