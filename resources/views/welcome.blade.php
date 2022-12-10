@extends('layouts.app')

@section('content')
<header id="m1" class="py-3 bg-light" style="font-family: 'Tajawal', sans-serif !important;">
    <!-- Start: Hero Clean Reverse -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-start mx-auto">
                <div class="text-center">
                    <h1 class="display-4 fw-bold">! نادي المحاسبة يرحب بكم</h1>
                    <p class="fs-5 text-muted mb-5">.هدفنا ايصال المعلومة لنرحلها لميزان الفهم ونقيدها للمعرفة</p>
                </div>
            </div>
            <div class="col-12 col-lg-10 mx-auto">
                                    <div class="text-center position-relative"><img class="img-fluid" src="{{Storage::url('assets/img/Untitled%20design%20(1).svg')}}" style="width: 800px;"></div>
            </div>
        </div>
    </div><!-- End: Hero Clean Reverse -->
</header>
<section id="m2" class="bg-white" dir="rtl" style="font-family: 'Tajawal', sans-serif !important;">
    <!-- Start: Features Centered Icons -->
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-crown">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">حقوق ملكية</h4>
                            <p class="text-muted">ما يملكه أصحاب المنشأة من أموال يتم استثمارها في المنشأة<br>
                            </p>
                        </div>
                        <button class="btn btn-sm px-0" type="button" onclick="location.href=&#39;article/1&#39;">
                            <span style="color: rgb(0, 0, 255);">أطلع على المزيد&nbsp;</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 viewBox="0 0 16 16" class="bi bi-arrow-left">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                            </svg>&nbsp;<br></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-users">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">خصوم</h4>
                            <p class="text-muted">ما على المنشأة من التزامات او ديون للغير(الخصوم)<br>
                            </p>
                            <button class="btn btn-sm px-0" type="button"><span style="color: rgb(0, 0, 255);">أطلع على المزيد&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                     viewBox="0 0 16 16" class="bi bi-arrow-left">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                                </svg>&nbsp;<br></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-bookmark">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">أصول</h4>
                            <p class="text-muted">ما للمنشأة من أشياء أو منافع ذات قيمة</p>
                            <button class="btn btn-sm px-0" type="button"><span style="color: rgb(0, 0, 255);">أطلع على المزيد&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                     viewBox="0 0 16 16" class="bi bi-arrow-left">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                                </svg>&nbsp;<br></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-clipboard-list">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                                <line x1="9" y1="12" x2="9.01" y2="12"></line>
                                <line x1="13" y1="12" x2="15" y2="12"></line>
                                <line x1="9" y1="16" x2="9.01" y2="16"></line>
                                <line x1="13" y1="16" x2="15" y2="16"></line>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">القوائم المالية</h4>
                            <p class="text-muted">مجموعة من البيانات المالية التي يتم عرضها ضمن قوائم مخصصة&nbsp;<br>
                            </p>
                            <button class="btn btn-sm px-0" type="button"><span style="color: rgb(0, 0, 255);">أطلع على المزيد&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                     viewBox="0 0 16 16" class="bi bi-arrow-left">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                                </svg>&nbsp;<br></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-switch-vertical">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="3 8 7 4 11 8"></polyline>
                                <line x1="7" y1="4" x2="7" y2="13"></line>
                                <polyline points="13 16 17 20 21 16"></polyline>
                                <line x1="17" y1="10" x2="17" y2="20"></line>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">إيرادات</h4>
                            <p class="text-muted">ما حققته المنشأة من بيع سلعها أو تقديم خدماتها للغير&nbsp;<br>
                            </p>
                            <button class="btn btn-sm px-0" type="button"><span style="color: rgb(0, 0, 255);">أطلع على المزيد&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                     viewBox="0 0 16 16" class="bi bi-arrow-left">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                                </svg>&nbsp;<br></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4">
                    <div class="card-body">
                        <div
                            class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-tabler icon-tabler-currency-bitcoin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 6h8a3 3 0 0 1 0 6a3 3 0 0 1 0 6h-8"></path>
                                <line x1="8" y1="6" x2="8" y2="18"></line>
                                <line x1="8" y1="12" x2="14" y2="12"></line>
                                <line x1="9" y1="3" x2="9" y2="6"></line>
                                <line x1="13" y1="3" x2="13" y2="6"></line>
                                <line x1="9" y1="18" x2="9" y2="21"></line>
                                <line x1="13" y1="18" x2="13" y2="21"></line>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">مصروفات</h4>
                            <p class="text-muted">ما أنفقته المنشأة أو التزمت بإنفاقه في سبيل الحصول على الإيرادات&nbsp;<br>
                            </p>
                            <button class="btn btn-sm px-0" type="button"><span style="color: rgb(0, 0, 255);">أطلع على المزيد</span>&nbsp;<svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-arrow-left">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                                </svg>&nbsp;<br></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Features Centered Icons -->
</section><!-- Start: Videos in rows, 2 and 3 videos per row -->
<main id="m33" class="page bg-light py-3">
    <!-- Start: 3 Videos per Row -->
    <section class="clean-block about-us">
        <div class="container">
            <h1 style="margin-bottom: 25px;">ضيوفنا</h1>
            <div class="row justify-content-center">
                @foreach($vid as $arr1)
                                        <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                                            <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{$arr1->url}}" style="height: 200px;"></iframe>
                                                <div class="card-body info">
                                                    <h4 class="card-title">{{$arr1->name}}</h4>
                                                    <p class="card-text">{{$arr1->descr}}</p>
                                                </div>
                                            </div>
                                        </div>

                @endforeach
            </div>
        </div>
    </section><!-- End: 3 Videos per Row -->
</main><!-- End: Videos in rows, 2 and 3 videos per row -->
<section class="bg-light py-3" dir="rtl">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center content" dir="ltr">
            <button class="btn btn-outline-primary btn-lg" type="button" onclick="location.href=&#39;video.html&#39;">
                أضغط هنا
            </button>
            <h3>&nbsp; &nbsp; &nbsp;ودك بمقاطع أكثر؟</h3>
        </div>
    </div>
</section><!-- End: Responsive UI Card 0.2 -->
<section id="m4" class="bg-white py5" dir="">
    <!-- Start: Hero Clean Reverse -->
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div
                class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div><img class="rounded img-fluid fit-cover" style="min-height: 300px;"
                          src="{{Storage::url('assets/img/Untitled%20design.svg')}}" width="800"></div>
            </div>
            <div class="col" dir="rtl">
                <div style="max-width: 450px;">
                    <h3 class="fw-bold pb-md-4">نحن بنادي المحاسبة نفخر بـ؟</h3>
                    <div class="row gy-4 row-cols-2 row-cols-md-2">
                        <div class="col">
                            <div><span class="Justify-Flex-Center purecounter counter-font count plus"
                                       data-purecounter-start="0" data-purecounter-end="5"
                                       data-purecounter-duration="2">5</span>
                                <p class="text-center text-uppercase">لجان</p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="Justify-Flex-Center purecounter counter-font plus"
                                       data-purecounter-start="0" data-purecounter-end="80"
                                       data-purecounter-duration="1">80</span>
                                <p class="text-center text-uppercase">عضو بالنادي</p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="Justify-Flex-Center purecounter counter-font plus"
                                       data-purecounter-start="0" data-purecounter-end="60"
                                       data-purecounter-duration="1">60</span>
                                <p class="text-center text-uppercase">فعالية سنوية</p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="Justify-Flex-Center purecounter counter-font plus-k"
                                       data-purecounter-start="0" data-purecounter-end="22"
                                       data-purecounter-duration="1">+ 29</span>
                                <p class="text-center text-uppercase">صديق بتويتر<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Hero Clean Reverse -->
</section><!-- Start: Brands -->
<section id="m5" class="py-5">
    <div class="container text-center">
        <div class="text-center">
            <p class="mb-4" style="font-size: 40px;font-weight: bold;">شركاء النجاح&nbsp;</p>
            <a href="#"> <img class="m-3" src="{{Storage::url('assets/img/brands/q1.png')}}"></a>
            <a href="#"> <img class="m-3" src="{{Storage::url('assets/img/brands/q2.png')}}"></a>
            <a href="https://www.gorsclub.com/"> <img class="m-3" src="{{Storage::url('assets/img/brands/gors.svg')}}"></a>
{{--            <a href="#"><img class="m-3" src="{{Storage::url('assets/img/brands/shopify.pdng')}}"></a>--}}
{{--            <a href="#"> <img class="m-3" src="{{Storage::url('assets/img/brands/qw4.svg')}}"></a>--}}
{{--            <a href="#"><img class="m-3" src="{{Storage::url("assets/img/brands/q3w.png")}}"></a>--}}
        </div>
    </div>
</section><!-- End: Brands -->
<section class="py-5 bg-white">
    <!-- Start: Testimonials -->
    <div class="container">
        <div class="row mb-5" style="font-size: 39px;">
            <div class="col-md-8 col-xl-6 col-xxl-12 text-center mx-auto" style="font-size: 40px;">
                <h2 class="fw-bold"><span class="underline pb-2"
                                          style="font-size: 40px;font-weight: bold;">قالوا عنا؟</span><br></h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
            <div class="col mb-4">
                <div class="d-flex align-items-center align-items-sm-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                         viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0 c">
                        <path
                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                    </svg>
                    <div>
                        <p class="fs-6 mb-3 ms-2"><span style="color: rgb(78, 93, 120);">كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;</span><br>
                        </p>
                        <div class="d-flex ms-2">
                            <div class="d-flex">
                                <p class="fw-bold me-2">عبدالله الزهراني</p>
                                <p class="text-muted mb-0">عضو بكلية الادارة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="d-flex align-items-center align-items-sm-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                         viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0 c">
                        <path
                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                    </svg>
                    <div>
                        <p class="fs-6 mb-3 ms-2"><span style="color: rgb(78, 93, 120);">كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;</span><br>
                        </p>
                        <div class="d-flex ms-2">
                            <div class="d-flex">
                                <p class="fw-bold me-2">عبدالله 2</p>
                                <p class="text-muted mb-0">عضو 2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="d-flex align-items-center align-items-sm-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                         viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0 c">
                        <path
                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                    </svg>
                    <div>
                        <p class="fs-6 mb-3 ms-2"><span style="color: rgb(78, 93, 120);">كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;</span><br>
                        </p>
                        <div class="d-flex ms-2">
                            <div class="d-flex">
                                <p class="fw-bold me-2">عبدالله 3</p>
                                <p class="text-muted mb-0">عضو 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Testimonials -->
</section><!-- End: Testimonials -->
<!-- Start: Testimonials -->
<section id="m6" class=" bg-light" style="padding-bottom: 0px !important;" dir="rtl">
    <div class="container py-5 bg-light">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-5"><span class="pb-3">من نحن؟</span></h2>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted" role="tablist" id="accordion-1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-1 .item-1" aria-expanded="true"
                                    aria-controls="accordion-1 .item-1">ماهو نادي المحاسبة؟
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel"
                             data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p><span style="color: rgb(78, 93, 120);">نادي المحاسبة هو نادي طلابي يتبع لعمادة شؤون الطلاب بجامعة الملك سعود يضم مجموعة من الطلاب المتطوعين والمتميزين والذين يسعون في خدمة زملائهم الطلاب من خلال الدورات المتخصصة والمحاضرات التي تساعد في الأثراء المعرفي وخدمة المجتمع خارج الجامعة من خلال الحملات التوعوية المختلفة .&nbsp;لام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;كلام عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط عشوائي فقط كلام عشوائي فقط كلام عشوائي فقط&nbsp;</span><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-1 .item-2" aria-expanded="false"
                                    aria-controls="accordion-1 .item-2">أين يقع مقر نادي المحاسبة؟
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0"><span style="color: rgb(78, 93, 120);">&nbsp;مقر نادي المحاسبة في مبنى كلية إدارة الأعمال رقم 67 في جامعة الملك سعود
الدور الأرضي -بجانب شؤون الطلاب-&nbsp;</span><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-1 .item-3" aria-expanded="false"
                                    aria-controls="accordion-1 .item-3">ماذا تقدم عضوية نادي المحاسبة؟
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0"><span style="color: rgb(78, 93, 120);">&nbsp;لعضو النادي الأولوية في دورات النادي الخاصة أو التي تتم بالتعاون مع جهات تدريبية، كما يسجل للعضو ساعات بالسجل المهاري نهاية الفصل بحسب مشاركته و إنجازه خلال الفصل.&nbsp;</span><br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section><!-- End: FAQ -->
@endsection
