<?php $__env->startSection('content'); ?>

<style>
    .image {
        position: relative;
        text-align: center;
        background: no-repeat url('<?php echo e(asset('images')); ?>/bg-roblox.jpg') 0 0 / cover;
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
        top: 230px;
        letter-spacing: 1.2px;
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
            <a class="btn btn-secondary rounded fw-bold shadow fs-3" href="#">تسوق منتجاتنا</a>
        </div>
    </div>


    <div class="container-fluid bg-body-tertiary py-5">
        <div class="fs-1 text-center fw-bold">
            الاقسام
        </div>

        <div class="row shadow-sm p-3 my-3 bg-white rounded">
            <div class="col-12 col-md-6 text-md-end text-center">
                <div class="card m-3">
                    <img class="card-img-top" src="<?php echo e(asset('images')); ?>/awakh.jpeg" alt="Card image cap">
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
                    <img class="card-img-top" src="<?php echo e(asset('images')); ?>/hsabat.jpeg" alt="Card image cap">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Windows\online-shop-app\resources\views/welcome.blade.php ENDPATH**/ ?>