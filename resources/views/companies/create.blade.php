@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Create new Company</div>
            <form action="#">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Company Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="website" class="form-label">Company Website</label>
                        <input type="text" name="website" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Company Address</label>
                        <textarea name="address" id="address" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-info">
                    <a href="{{ url('companies') }}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </form>
        </div>

    </div>
    <div class="col-6">
        <div class="alert alert-info">
            Silakan isi formulir disamping untuk membuat company baru.
        </div>
    </div>
</div>


@endsection
