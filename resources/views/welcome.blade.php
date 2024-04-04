@extends('layout')

@section('content')

<style>
    .image {
        background-color: rgba(0, 0, 0, 0.6);
        background-image: url('{{ asset('images') }}/bg-roblox.jpg');
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover; 
    }
    .font {
        font-size: 25px;
        width: 100%;
        font-weight: 700;
    }
    .head {
        font-size: 35px; !important
        color: #e0dee0; !important
    }
</style>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-md-end text-white image" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="col-md-5 p-lg-5 my-5 w-100">
            <h1 class="font head">اهلا بك</h1>
            <p class="font">هذا متجرنا المتواضع لبيع منتجات روبلوكس وتحديدا بلوكس فروت.</p>
            <a class="btn btn-secondary rounded fw-bold shadow fs-3" href="#">تسوق منتجاتنا</a>
        </div>
    </div>



    <div class="container-fluid bg-body-tertiary py-5">
        <div class="fs-1 text-center fw-bold head">
            الاقسام
        </div>

        <div class="row shadow-sm p-3 my-3 bg-white rounded">
            <div class="col-12 col-md-6 text-md-end text-center">
                <div class="card m-3">
                    <img class="card-img-top" src="{{ asset('images') }}/awakh.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">فواكه بلوكس فروت</h5>
                        <p class="card-text">بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                            بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا </p>
                        <a href="#" class="btn btn-dark text-white">اذهب للتسوق</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-md-end text-center">
                <div class="card m-3">
                    <img class="card-img-top" src="{{ asset('images') }}/hsabat.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">حسابات بلوكس فروت</h5>
                        <p class="card-text">بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                            بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا </p>
                        <a href="#" class="btn btn-dark text-white">اذهب للتسوق</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
