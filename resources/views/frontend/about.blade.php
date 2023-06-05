@extends('layouts.app')

@section('style')
@endsection

@section('content')
 <!-- breadcrumb start -->
 <section class="breadcrumb-section p-0">
    <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Trang giới thiệu</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('trang_chu') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- About us section start -->
<section class="about-main ratio_36">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-2">
                    <h2>PHONGTRO2023 là gì ?</h2>
                    <p class="font-roboto">Phòng trọ 2023.  Đây là một trang web tìm trọ dành cho những người tìm trọ ở TPHCM PHONGTRO2023 cũng là sản phẩm được tạo ra để làm bài báo cáo của nhóm.</p>
                </div>
                <div class="user-about">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7">
                            <div class="about-content">
                                <h3>Tại sao lại có PHONGTRO2023 ?</h3>
                                <p class="font-roboto">Sau hai năm học tập tại TPHCM mình thấy việc tìm trọ của các bạn sinh viên ở đây khá là khó khăn. Đó chính là lý do mình muốn tạo nên trang web này.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 map-image col-lg-5">
                            <img src="../assets/images/about/map.png" class="img-fluid bg-img" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us section end -->


@endsection

@section('modal')
@endsection

@section('js')
@endsection
