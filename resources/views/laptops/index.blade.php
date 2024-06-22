@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laptops</h1>
    <a href="{{ route('laptops.create') }}" class="btn btn-primary">Add New Laptop</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>{{ $laptop->storage }}</td>
                    <td>{{ $laptop->price }}</td>
                    <td>
                        <a href="{{ route('laptops.show', $laptop->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('laptops.edit', $laptop->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laptops.destroy', $laptop->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div data-aos="fade-up" class="aos-init aos-animate container">
        <h1 class="display-4 font-weight-bold text-center text-success my-4">All Category</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://cdn.mos.cms.futurecdn.net/iNfgXSefxEyhisXTzF2GcJ.jpg" alt="Dell">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://www.logotaglines.com/wp-content/uploads/2016/08/hp-logo.jpg" alt="Hp">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Accer">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://logos-world.net/wp-content/uploads/2022/07/Lenovo-Logo.jpg" alt="Lenovo">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://1000logos.net/wp-content/uploads/2017/06/Toshiba-Logo.png" alt="Toshiba">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white" data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://i.ibb.co/BwBRRhJ/Apple-Logo.png" alt="Apple">
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
