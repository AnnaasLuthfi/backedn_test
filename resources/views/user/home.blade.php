@extends('layout.layout')

@section('title','home')

@section('content')
<div class="container mt-5">
    <button type="button" class="btn btn-primary"><a href="add_form" style="text-decoration: none; color: white;">Add Form</a></button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Nationallity</th>
                <th scope="col">DOB</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            foreach ($customer as $cus)
            <tr>
                <th scope="row">1</th>
                <td>{{$cus->cst_nama}}</td>
                <td>{{$cus->nationallity->nationallity_nama}}</td>
                <td>{{$cus->cst_dob}}</td>
                <td>{{$cus->cst_email}}</td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary">Detail</button>
                </td>
            </tr>
        </tbody>
    </table>


</div>

@endsection