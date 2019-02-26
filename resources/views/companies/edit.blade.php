@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Edit data {{ $company->name }}</div>
            <form action="{{ url('companies/'.$company->id) }}" method="post">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Company Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $company->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="website" class="form-label">Company Website</label>
                        <input type="text" name="website" class="form-control" value="{{ $company->website }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Company Address</label>
                        <textarea name="address" id="address" class="form-control" required>{{ $company->address }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-info">
                    <a href="{{ url('companies/'.$company->id) }}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </form>
        </div>

    </div>
    <div class="col-6">
        <div class="alert alert-info">
            Silakan isi formulir disamping untuk edit company {{ $company->name }}.
        </div>
    </div>
</div>

@endsection
