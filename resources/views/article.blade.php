@extends('layouts.app')

@section('content')
    <div class="cust_bloglistintro">
        <h2 class="text-center">أصول</h2>
        <p class="text-muted text-center">هنا تجد احدث المقالات عن الاصول قراءة ممتعه</p>
    </div><!-- Start: responsive-blog-card-slider -->
    <div class="blog-slider py-5" dir="rtl">
        <div class="blog-slider__wrp swiper-wrapper">
            @foreach($arc as $ar)
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img"><img src="{{Storage::url($ar->smallImage)}}"/></div>
                    <div class="blog-slider__content"><span
                            class="blog-slider__code">{{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}</span>
                        <div class="blog-slider__title">
                            <p>{{$ar->title}}</p>
                        </div>
                        <div class="blog-slider__text">
                            <p>{{$ar->smallDesc}}</p>
                        </div>
                        <a class="blog-slider__button" href="{{url('post/'.$ar->id)}}">أقرا الموضوع</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="blog-slider__pagination"></div>
    </div><!-- End: responsive-blog-card-slider -->
    <!-- Start: Latest Blog -->
    <div class="blog-home3 py-5" dir="rtl">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">

                <!-- Column -->
            </div>

            <div class="row mt-4">
                <!-- Column -->
                @php $e=0; @endphp
                @foreach(($arc2) as $ar)

                    @if($e==0)
                        @php $e++; @endphp
                        <div class="col-lg-6">
                            <div class="card border-0 mb-4">
                                <a href="{{url('post/'.$ar->id)}}"><img class="card-img-top" src="{{Storage::url(str_replace('\\', '/',$ar->smallImage))}}" alt="iamge for {{$ar->title}}"></a>
                                <div class="date-pos text-center text-white p-3 bg-success-gradiant">  &nbsp; &nbsp; {{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}</div>
                                <h5 class="font-weight-medium mt-3"><a href="{{url('post/'.$ar->id)}}" class="link text-decoration-none"> {{$ar->title}} </a></h5>
                                <p class="m-t-20">{{$ar->smallDesc}} </p>
                            </div>
                        </div>
                        @continue
                    @endif
                        @if($e==1)
                            @php $e++; @endphp
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-6">
                                        <div class="card border-0 mb-4">
                                            <a href="{{url('post/'.$ar->id)}}"><img class="card-img-top"
                                                             src="{{Storage::url(str_replace('\\', '/',$ar->smallImage))}}"
                                                             alt="iamge for {{$ar->title}}"></a>
                                            <div class="date-pos text-center text-white p-3 bg-success-gradiant"> &nbsp;
                                                &nbsp; {{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}
                                            </div>
                                            <h6 class="font-weight-medium mt-3"><a href="{{url('post/'.$ar->id)}}" class="link text-decoration-none">{{$ar->title}}</a></h6>
                                        </div>
                                    </div>
                            @continue
                        @endif
                        @if($e==2)
                            @php $e++; @endphp
                                        <div class="col-md-6">
                                            <div class="card border-0 mb-4">
                                                <a href="{{url('post/'.$ar->id)}}"><img class="card-img-top"
                                                                 src="{{Storage::url(str_replace('\\', '/',$ar->smallImage))}}"
                                                                 alt="iamge for {{$ar->title}}"></a>
                                                <div class="date-pos text-center text-white p-3 bg-success-gradiant"> &nbsp;
                                                    &nbsp; {{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}
                                                </div>
                                                <h6 class="font-weight-medium mt-3"><a href="{{url('post/'.$ar->id)}}" class="link text-decoration-none">{{$ar->title}}</a></h6>
                                            </div>
                                        </div>
                            @continue
                        @endif
                        @if($e==3)
                            @php $e++; @endphp
                                        <div class="col-md-6">
                                            <div class="card border-0 mb-4">
                                                <a href="{{url('post/'.$ar->id)}}"><img class="card-img-top"
                                                                 src="{{Storage::url(str_replace('\\', '/',$ar->smallImage))}}"
                                                                 alt="iamge for {{$ar->title}}"></a>
                                                <div class="date-pos text-center text-white p-3 bg-success-gradiant"> &nbsp;
                                                    &nbsp; {{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}
                                                </div>
                                                <h6 class="font-weight-medium mt-3"><a href="{{url('post/'.$ar->id)}}" class="link text-decoration-none">{{$ar->title}}</a></h6>
                                            </div>
                                        </div>
                            @continue
                        @endif

                        @if($e==4)
                            @php $e++; @endphp
                                        <div class="col-md-6">
                                            <div class="card border-0 mb-4">
                                                <a href="{{url('post/'.$ar->id)}}"><img class="card-img-top"
                                                                 src="{{Storage::url(str_replace('\\', '/',$ar->smallImage))}}"
                                                                 alt="iamge for {{$ar->title}}"></a>
                                                <div class="date-pos text-center text-white p-3 bg-success-gradiant"> &nbsp;
                                                    &nbsp; {{ \Carbon\Carbon::parse($ar->created_at)->diffForHumans()}}
                                                </div>
                                                <h6 class="font-weight-medium mt-3"><a href="{{url('post/'.$ar->id)}}" class="link text-decoration-none">{{$ar->title}}</a></h6>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            @continue
                        @endif

                        @php $e=0; @endphp

                @endforeach
                <!-- Column -->
            </div>
        </div>
    </div><!-- End: Latest Blog -->
@endsection
