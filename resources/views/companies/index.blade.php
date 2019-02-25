@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Company Listing</div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Infokom Company</td>
                <td>email@infokom.com</td>
                <td>www.infokom.com</td>
                <td>Jln. Bali</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
