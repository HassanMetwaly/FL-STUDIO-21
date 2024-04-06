@extends('layout')

@section('content')
    <style>
        .image {
            position: relative;
            text-align: center;
            background: no-repeat url('{{ asset('images') }}/bg-roblox.jpg') 0 0 / cover;
            height: 100vh;
        }

        .image::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .content {
            position: relative;
            top: 200px;
            letter-spacing: 1.2px;
        }

        .container-padding {
            padding-top: 60px;
        }

        .font {
            font-size: 25px;
            width: 100%;
            font-weight: 700;
        }

        .head {
            width: 100%;
            font-weight: 900;
            font-size: 38px;
            color: white;
        }
    </style>
    <div class="overflow-hidden p-3 p-md-5 m-md-3 text-white image">
        <div class="content">
            <h1 class="head">اهلا بك.</h1>
            <p class="font">هذا متجرنا المتواضع لبيع منتجات روبلوكس وتحديدا بلوكس فروت...</p>
            <a class="btn btn-secondary rounded fw-bold shadow fs-3" href="/products">تسوق منتجاتنا</a>
        </div>
    </div>

    <section class="container-padding">
        <h1 class="fs-1 mt-5 text-center">الاقسام</h1>
        <div class="container py-5">

            <div class="row shadow-sm p-3 my-3 bg-white rounded">
                @foreach ($categories as $category)
                    <div class="col-12 col-md-6 text-md-end text-center">
                        <div class="card m-3">
                            <img class="card-img-top" src="{{ asset('images') }}/{{ $category->image }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->name }}</h5>
                                <p class="card-text">{{ $category->short_description }}</p>
                                <a href="/products/{{ $category->slug }}" class="btn btn-dark text-white">اذهب
                                    للتسوق</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
